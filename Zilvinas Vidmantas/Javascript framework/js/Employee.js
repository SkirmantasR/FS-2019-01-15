class Employee extends Component{
  constructor(object, functions) {
    super();
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
      // Nuskaitymo iš redagavimo formos logika
      this.update(this.id)
    });
    return card;
  }
}