// Pavyzdiniai duomenys
console.table(cars);

// Įeinamieji parametrai
/**
 * Prototipas įgalinti duomenų atvaizdavimui, trinimui ir redagavimui, panaudojant Bootstrap lentelę
 * @param {*String} tableName - Lentelės pavadinimas
 * @param {*Array} data - Objektų masyvas, su savybe id
 * @param {*HTMLElement} container - mazgas, turiniui talpinti
 */
function ObjectTableManager(tableName, data, container) {
  let propNames = Object.getOwnPropertyNames(data[0]).filter(el => el != 'id');
  // Privatūs kintamieji
  let tableTitle = '<h1 class="text-dark text-center">' + tableName + '</h1>';
  let table = document.createElement('table');
  let tableHeader = formatHeader();
  let tbody = document.createElement('tbody');
  table.className = 'table';
  table.innerHTML += tableHeader;
  table.appendChild(tbody);
  container.innerHTML += tableTitle;
  container.appendChild(table);


  // Formatuojama lentelės antraštė
  function formatHeader() {
    let result = '<thead class="thead-dark"><tr>';
    propNames.forEach(el => result += '<th>' + camelToHeader(el) + '</th>');
    return result + '<th></th><th></th></tr></thead>';
  }

  function camelToHeader(camelCase) {
    camelCase = camelCase.charAt(0).toUpperCase() + camelCase.slice(1); // Pirmają parašome didžiają
    for (let i = 1; i < camelCase.length; i++) { // Pradedame ieškoti nuo antros raidės (nes pirma turi būt didžioji)
      if (camelCase[i] == camelCase[i].toUpperCase()) { // Jeigu didžioji
        camelCase = camelCase.slice(0, i) + camelCase.charAt(i).toLowerCase() + camelCase.slice(i + 1); // Paverčiame  mažąja
        camelCase = camelCase.slice(0, i) + ' ' + camelCase.slice(i++); // įterpiamas tarpas
      }
    }
    return camelCase;
  }


  this.render = () => {
    tbody.innerHTML = '';
    data.forEach(el => {
      let row = document.createElement('tr');
      propNames.forEach(prop => row.innerHTML += '<td>' + el[prop] + '</td>');


      let btnContainer = document.createElement('td');
      btnContainer.className = 'd-flex justify-content-between';

      let btnUpdate = document.createElement('button');
      btnUpdate.className = 'btn btn-warning';
      btnUpdate.innerHTML = `
        <span class="d-none d-md-inline">Update</span>
        <span class="d-inline d-md-none">&#8796;</span>`;

      let btnDelete = document.createElement('button');
      btnDelete.className = 'btn btn-danger';
      btnDelete.innerHTML = `
      <span class="d-none d-md-inline">Delete</span>
      <span class="d-inline d-md-none">&#x2715;</span>`;

      btnUpdate.addEventListener('click', () => {
        let rowDataTags = Array.prototype.slice.call(row.children);
        let editableDataTags = rowDataTags.slice(0, rowDataTags.length - 1);
        setEditable(el.id, editableDataTags);
      });

      btnDelete.addEventListener('click', () => {
        deleteObject(el.id);
        this.render();
      });

      btnContainer.appendChild(btnUpdate);
      btnContainer.appendChild(btnDelete);
      row.appendChild(btnContainer);
      tbody.appendChild(row);
    });
  }

  function deleteObject(id) {
    data = data.filter(el => el.id != id)
  }

  function setEditable(id, editableTags) {
    editableTags.forEach(el => {

    })
  }
}

let carContainer = document.querySelector('.js-cars-container');
let carManager = new ObjectTableManager('Car manager', cars, carContainer); // Duomenys ir konteineris
carManager.render();