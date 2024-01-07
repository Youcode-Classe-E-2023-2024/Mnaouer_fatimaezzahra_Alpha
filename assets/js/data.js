fetch('https://jsonplaceholder.typicode.com/posts')
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        console.log(data);

        let table = document.getElementById("productTable");
        let row, cell;

        for (let i = 0; i < 5; i++) {
            row = table.insertRow();
            cell = row.insertCell();
            cell.textContent = data[i].id;
            cell = row.insertCell();
            cell.textContent = data[i].title;
            cell = row.insertCell();
            cell.textContent = data[i].body;
            cell = row.insertCell();
            cell.textContent = data[i].userId;
            cell = row.insertCell();
            cell.innerHTML = "<a class=\"btn btn-sm btn-primary\" href=\"\">Edit</a>\n" +
                             "<a class=\"btn btn-sm btn-primary\" href=\"\">Delete</a>";
        }
    })
    .catch(error => {
        console.error('Error during API request', error);
    });

fetch('https://jsonplaceholder.typicode.com/users')
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        console.log(data);

        let table = document.getElementById("userTable");
        let row, cell;

        for (let i = 0; i < 5; i++) {
            row = table.insertRow();
            cell = row.insertCell();
            cell.textContent = data[i].id;
            cell = row.insertCell();
            cell.textContent = data[i].name;
            cell = row.insertCell();
            cell.textContent = data[i].email;
            cell = row.insertCell();
            cell.innerHTML = "<a class=\"btn btn-sm btn-primary\" href=\"\">Edit</a>\n" +
                             "<a class=\"btn btn-sm btn-primary\" href=\"\">Delete</a>";
        }
    })
    .catch(error => {
        console.error('Error during API request', error);
    });
