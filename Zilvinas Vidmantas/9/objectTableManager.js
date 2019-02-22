// Pavyzdiniai duomenys
console.table(cars);

// Įeinamieji parametrai
/**
 * Prototipas įgalinti duomenų atvaizdavimui, trinimui ir redagavimui, panaudojant Bootstrap lentelę
 * @param {*String} tableName - Lentelės pavadinimas
 * @param {*Array} data - Objektų masyvas, su savybe id
 * @param {*HTMLElement} container - Mazgas, turiniui talpinti
 */
function ObjectTableManager(tableName, data, container) {
  let propNames = Object.getOwnPropertyNames(data[0]).filter(el => el != "id");
  let objectBeingEdited = false;
  // Privatūs kintamieji
  let tableTitle = '<h1 class="text-dark text-center">' + tableName + "</h1>";
  let table = document.createElement("table");
  let tableHeader = formatHeader();
  let tbody = document.createElement("tbody");
  table.className = "table table-striped";
  table.innerHTML += tableHeader;
  table.appendChild(tbody);
  container.innerHTML += tableTitle;
  container.appendChild(table);

  // Formatuojama lentelės antraštė
  function formatHeader() {
    let result = '<thead class="thead-dark"><tr>';
    propNames.forEach(el => (result += "<th>" + camelToHeader(el) + "</th>"));
    return result + "<th></th></thead>";
  }

  // Keičia objekto savybę į headerį: labasAsZmogus -> Labas as Zmogus
  function camelToHeader(camelCase) {
    camelCase = camelCase.charAt(0).toUpperCase() + camelCase.slice(1); // Pirmają parašome didžiają
    for (let i = 1; i < camelCase.length; i++) {
      // Pradedame ieškoti nuo antros raidės (nes pirma turi būt didžioji)
      if (camelCase[i] == camelCase[i].toUpperCase()) {
        // Jeigu didžioji
        camelCase =
          camelCase.slice(0, i) +
          camelCase.charAt(i).toLowerCase() +
          camelCase.slice(i + 1); // Paverčiame  mažąja
        camelCase = camelCase.slice(0, i) + " " + camelCase.slice(i++); // įterpiamas tarpas
      }
    }
    return camelCase;
  }

  this.render = () => {
    tbody.innerHTML = "";
    data.forEach(el => {
      let row = document.createElement("tr");
      propNames.forEach(
        prop => (row.innerHTML += '<td class="v-middle">' + el[prop] + "</td>")
      );

      let btnContainer = document.createElement("td");
      btnContainer.className = "d-flex justify-content-between";

      let btnUpdate = document.createElement("button");
      btnUpdate.className = "btn btn-warning btn-crud";
      btnUpdate.innerHTML = `
        <span class="d-none d-md-inline">Update</span>
        <span class="d-inline d-md-none">&#8796;</span>`;

      let btnDelete = document.createElement("button");
      btnDelete.className = "btn btn-danger btn-crud";
      btnDelete.innerHTML = `
      <span class="d-none d-md-inline">Delete</span>
      <span class="d-inline d-md-none">&#x2715;</span>`;

      btnUpdate.addEventListener("click", event => {
        if (!objectBeingEdited) {
          let rowDataTags = Array.prototype.slice.call(row.children);
          let editableDataTags = rowDataTags.slice(0, rowDataTags.length - 1);
          setEditable(btnUpdate, el.id, editableDataTags);
        } else {
          alert("Pabaikite keisti elementą");
        }
      });

      btnDelete.addEventListener("click", () => {
        if (!objectBeingEdited) {
          deleteObject(el.id);
          this.render();
        } else {
          alert("Pabaikite keisti elementą");
        }
      });

      btnContainer.appendChild(btnUpdate);
      btnContainer.appendChild(btnDelete);
      row.appendChild(btnContainer);
      tbody.appendChild(row);
    });
  };

  function deleteObject(id) {
    data = data.filter(el => el.id != id);
  }

  function saveObject(object){

  }

  function updateObject(object){

  }

  function setEditable(btnUpdate, id, editableTags) {
    objectBeingEdited = true;
    editableTags.forEach((el, i) => {
      el.setAttribute("contenteditable", "true");
      el.classList.add("editable");
      if (i != editableTags.length - 1)
        el.style.borderRight = "solid 1px #6c92b8";
    });
    let btnSave = document.createElement("button");
    btnSave.className = "btn btn-success btn-crud";
    btnSave.innerHTML = `
      <span class="d-none d-md-inline">Save</span>
      <span class="d-inline d-md-none">&#x2713;</span>`;
    btnUpdate.parentNode.insertBefore(btnSave, btnUpdate);
    btnUpdate.remove();
    btnSave.addEventListener("click", () => {
      objectBeingEdited = false;
      // Baigiau ties  gero bdo ieškojimu išsitrauk reikšmes iš HTML kolekcijos
      let values = editableTags.map(el => el.value);
      console.log(values);
      saveObject(id, formObject({id}));
      render();
    });
  }
}

function formObject(){

}

let carContainer = document.querySelector(".js-cars-container");
let carManager = new ObjectTableManager("Car manager", cars, carContainer); // Duomenys ir konteineris
carManager.render();
