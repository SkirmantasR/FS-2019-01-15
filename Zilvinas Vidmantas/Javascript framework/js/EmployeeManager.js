class EmployeeManager extends Component{
  constructor(title, target) {
    super();
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
    this.render(); // re-render view for result observation
  }

  updateEmployee = id => {
    console.log('updated element', id);
  }
}