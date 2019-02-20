console.table(cars);

let carContainer = document.querySelector('.js-cars-container');

let carTable = document.createElement('table');
carTable.className = 'table';
let carTableHeader = `
<thead class="thead-dark">
  <tr>
    <th>Brand</th>
    <th>Model</th>
    <th>Year</th>
    <th>Engine Volume</th>
    <th></th>
  </tr>
</thead>`;
let tbody = document.createElement('tbody');

cars.forEach(el => {
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
    console.log('Atnaujinta mašina su id:', el.id)
  });

  btnDelete.addEventListener('click', () => {
    console.log('Ištrinta mašina su id:', el.id)
  });

  btnContainer.appendChild(btnUpdate);
  btnContainer.appendChild(btnDelete);
  row.appendChild(btnContainer);
  tbody.appendChild(row);
});

carTable.innerHTML += carTableHeader;

// elementų įdėjimas į DOM - pačioje pabaigoje
carTable.appendChild(tbody);
carContainer.appendChild(carTable);