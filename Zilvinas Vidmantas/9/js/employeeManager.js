'use strict';
class Employee {
  constructor(object, functions) {
    for (var propertyName in object) this[propertyName] = object[propertyName];
    this.delete = functions.delete;
    this.update = functions.update;
  }

  toCard = () => {
    let card = document.createElement('div');
    card.className = 'card employee';

    let cardBody = document.createElement('div');
    cardBody.className = 'card-body';

    let btnContainer = document.createElement('div');
    btnContainer.className = 'mb-2';

    let btnDelete = document.createElement('button');
    btnDelete.className = 'close';
    btnDelete.innerHTML = '<span>&#10006;</span>';

    let btnUpdate = document.createElement('button');
    btnUpdate.className = 'close mr-2';
    btnUpdate.innerHTML = '<span>&#9998;</span>';

    let btnMain = document.createElement('a');
    btnMain.className = 'btn btn-primary d-block mx-auto mb-3';
    btnMain.innerHTML = 'Call me maybe';
    btnMain.setAttribute('href', '#');

    cardBody.innerHTML += `
    <h5 class="card-title">${this.fullName}</h5>
    <ul class="list-group">
      <li class="list-group-item">
        <span class="prop-name">Direct Boss</span>
        <span>${this.directBoss}</span>
      </li>
      <li class="list-group-item">
        <span class="prop-name">Salary</span>
        <span>${this.salary}</span>
      </li>
      <li class="list-group-item">
        <span class="prop-name">Position</span>
        <span>${this.position}</span>
      </li>
    </ul>`;

    btnContainer.appendChild(btnDelete);
    btnContainer.appendChild(btnUpdate);
    card.appendChild(cardBody);
    card.appendChild(btnMain);
    cardBody.insertBefore(btnContainer, card.querySelector('h5'));

    btnDelete.addEventListener('click', () => this.delete(this.id));
    btnUpdate.addEventListener('click', () => {
      // Nuskaitymo i6 redagavimo formos logika
      this.update(this.id)
    });

    return card;
  }
}

class EmployeeManager {
  constructor(title, target) {
    this.title = title;
    this.container = document.querySelector(target);
    if (arguments.length > 2) {
      this.employees = [];
      for (let i = 2; i < arguments.length; i++) this.employees.push(new Employee(
        arguments[i], {
          delete: this.deleteEmployee,
          update: this.updateEmployee,
        }
      ));
    }
  }

  // private method 
  getPrivate() {
    return 'private';
  }

  initialize() {

  }
  
  renderEmployees() {
    let empContainer = document.createElement('div');
    empContainer.className = 'employee-container';
    this.employees.forEach(employee => empContainer.appendChild(employee.toCard()));
    return empContainer;
  }

  // public methods
  render = () => {
    this.container.innerHTML = '';
    let header = `<h1 class="manager-title">${this.title}</h1>`;
    this.container.innerHTML += header;
    this.container.appendChild(this.renderEmployees());
  }

  deleteEmployee = id => {
    this.employees = this.employees.filter(el => el.id != id); // delete from object
    this.render(); // re--render view for result observation
    console.log('deleted element', id);
  }

  updateEmployee = id => {
    console.log('updated element', id);
  }
}

let employeeManager = new EmployeeManager('Darbuotojų tvarkyklė', '.js-employee-container', ...employees);
employeeManager.render();