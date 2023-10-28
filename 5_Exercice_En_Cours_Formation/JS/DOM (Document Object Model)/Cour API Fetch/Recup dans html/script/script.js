const url = 'https://task.adrardev.fr/task/all';
const taches = document.querySelector('#tasks');
const tasks = fetch(url).then(async (response) => {
  const json = await response.json();
  console.log(json);
  json.forEach((element) => {
    const article = document.createElement('article');
    article.setAttribute('id', element.id);
    const para = document.createElement('p');
    para.textContent = element.name;

    const statut = document.createElement('p');
    statut.textContent = element.status;

    article.appendChild(para);
    article.appendChild(statut);
    taches.appendChild(article);
    console.log(element);
  });
});
