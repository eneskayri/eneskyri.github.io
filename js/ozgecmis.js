fetch('https://api.github.com/users/eneskayri/repos')
.then(response => response.json())
.then(repos => {
 let table = document.getElementById("repos")
 repos.forEach(repo => {
   let row = document.createElement("li");
   row.innerHTML = `<a href="${repo.html_url}" style=" color: white;"> ${repo.name} </a>`;
   table.appendChild(row)
 });
})