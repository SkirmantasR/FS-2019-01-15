console.table(cars);

// Įeinamieji parametrai
/**
 * Prototipas įgalinti duomenų atvaizdavimui, trinimui ir redagavimui, panaudojant Bootstrap lentelę
 * @param {*String} tableName - Lentelės pavadinimas
 * @param {*Array} data - Objektų masyvas, su savybe id
 * @param {*HTMLElement} container - Mazgas, turiniui talpinti
 */
function ObjectManager(tableName, data, container) {
  let propNames = Object.getOwnPropertyNames(data[0]).filter(el => el != 'id');
  let tableTitle = document.createElement('h1');
  let tableHeader = formatHeader();
  let formCreate = formatFormCreate();
  let table = document.createElement('table');
  let tbody = document.createElement('tbody');
  let objectBeingEdited = false;
  let maxId = data.length;

  addSubmitHandler(formCreate);

  tableTitle.innerHTML = tableName;
  tableTitle.className = 'text-dark text-center';
  table.className = "table table-striped";
  table.innerHTML += tableHeader;
  table.appendChild(tbody);

  container.appendChild(tableTitle);
  container.appendChild(formCreate);
  container.appendChild(table);

  container.className = "border border-dark rounded p-3 my-3 manager-panel";

  render();

  function formatFormCreate() {
    let form = document.createElement('form');
    form.className = 'my-3 p-3';
    let formContent = `
    <h3 class="text-sucess">Create Object</h3>
    <div class="form-row">`;
    propNames.forEach(el => {
      formContent += `
      <div class="form-group col">
        <label for="${el}">${camelToTitle(el)}</label>
        <input type="text" class="form-control" id="${el}" name="${el}">
      </div>`;
    });
    formContent += `</div><input type="submit" class="btn btn-success d-block mx-auto" value="Add object">`;
    form.innerHTML = formContent;
    return form;
  }

  function addSubmitHandler(form) {
    form.addEventListener('submit', e => {
      e.preventDefault();
      let values = propNames.map(el => form[el].value);
      let formedObject = formObject(maxId++, values);
      saveObject(formedObject);
      render();
    });
  }
  // Formatuojama lentelės antraštės
  function formatHeader() {
    let result = '<thead class="thead-dark"><tr>';
    propNames.forEach(el => (result += "<th>" + camelToTitle(el) + "</th>"));
    return result + "<th></th></thead>";
  }

  function camelToTitle(camelCase) {
    camelCase = camelCase.charAt(0).toUpperCase() + camelCase.slice(1);
    for (let i = 1; i < camelCase.length; i++) {
      if (camelCase[i] == camelCase[i].toUpperCase()) {
        camelCase =
          camelCase.slice(0, i) +
          camelCase.charAt(i).toLowerCase() +
          camelCase.slice(i + 1);
        camelCase = camelCase.slice(0, i) + " " + camelCase.slice(i++);
      }
    }
    return camelCase;
  }

  function render() {
    tbody.innerHTML = '';
    data.forEach(el => {
      let row = document.createElement("tr");
      propNames.forEach(prop => row.innerHTML += '<td class="v-middle">' + el[prop] + "</td>");

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
          render();
        } else {
          alert("Pabaikite keisti elementą");
        }
      });

      btnContainer.appendChild(btnUpdate);
      btnContainer.appendChild(btnDelete);
      row.appendChild(btnContainer);
      tbody.appendChild(row);
    });
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
      let values = editableTags.map(el => el.innerHTML);
      let formedObject = formObject(id, values);
      updateObject(formedObject);
      render();
    });
  }

  function deleteObject(id) {
    data = data.filter(el => el.id != id);
  }

  function saveObject(object){
    data.push(object);
  }

  function updateObject(object) {
    data = data.map(ob => {
      if (object.id == ob.id) return object;
      return ob;
    });
  }

  function formObject(id, array) {
    let object = {
      id
    };
    array.forEach((el, i) => object[propNames[i]] = el);
    return object;
  }
}

let carContainer = document.querySelector(".js-cars-container");
let carManager = new ObjectManager("Car manager", cars, carContainer);