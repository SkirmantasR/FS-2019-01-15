// Pavyzdiniai duomenys
console.table(cars);

// Įeinamieji parametrai
/**
 * Prototipas įgalinti duomenų atvaizdavimui, trinimui ir redagavimui, panaudojant bootstrap lentelę
 * @param {*Array} data - Objektų masyvas su savybe id
 * @param {*HTMLElement} container - mazgas, turiniui talpinti
 */
function ObjectTableManager(data, container) {
  // Veiksmai vykdomi vieną kartą, sukuriant objektą su žodeliu 'new'
  // Privatūs kintamieji
  let table = document.createElement('table');
  let tableHeader = formatHeader();
  let tbody = document.createElement('tbody');
  table.className = 'table';
  table.innerHTML += tableHeader;
  table.appendChild(tbody);
  container.appendChild(table);


  // Formatuojama lentelės antraštė
  function formatHeader() {
    let result = '<thead class="thead-dark"><tr>';
    let obProps = Object.getOwnPropertyNames(data[0]); // raktų masyvas - [ 'id', 'key1', key2, ..., 'keyn']
    obProps.forEach((el) => {
      if (el != 'id') {
        let keyName = el;
        // Ieškoma didžiųjų raidžių
        keyName = keyName.charAt(0).toUpperCase() + keyName.slice(1); // Pirmają parašome didžiają
        for (let i = 1; i < keyName.length; i++) { // Pradedame ieškori nuo antros raidės
          if (keyName[i] == keyName[i].toUpperCase()) { // Jeigu didžioji
            keyName = keyName.slice(0, i) + keyName.charAt(i).toLowerCase() + keyName.slice(i + 1); // Paverčiame  mažąja
            keyName = keyName.slice(0, i) + ' ' + keyName.slice(i++); // įterpiamas tarpas
          }
        }
        result += '<td>' + keyName + '</td>';
      }
    });
    return result + '</tr></thead>';
  }

  this.render = () => {
    tbody.innerHTML = '';
    data.forEach(el => {
      let row = document.createElement('tr');
      row.setAttribute('car-id', el.id);
      row.innerHTML = `
      <td>${el.brand}</td>  
      <td>${el.model}</td>  
      <td>${el.year}</td>  
      <td>${el.engineVolume}</td>`;

      let btnContainer = document.createElement('td');
      btnContainer.className = 'd-flex justify-content-between';

      let btnUpdate = document.createElement('button');
      btnUpdate.className = 'btn btn-warning';
      btnUpdate.innerHTML = 'Update';

      let btnDelete = document.createElement('button');
      btnDelete.className = 'btn btn-danger';
      btnDelete.innerHTML = 'Delete';

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
    editableTags.forEach(el=>{
      // baigiau čia -------------------------------------------------------------------------
    })
  }
}

let carContainer = document.querySelector('.js-cars-container');
let carManager = new ObjectTableManager(cars, carContainer); // Duomenys ir konteineris
carManager.render();