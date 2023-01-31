const searchField = document.getElementsByName('search')[0]
var timeoutId = null

searchField.addEventListener('input', (e)=>{
    let pesquisa = e.target.value
    const resultsField = document.querySelector('#search-results')

    if(pesquisa === '') {
        resultsField.classList.add('d-none')
        resultsField.innerHTML = ''
        return
    }

    if(timeoutId) {
        clearTimeout(timeoutId)
    }

    timeoutId = setTimeout(() => {
        rota = '/pesquisar_produtos/' + pesquisa
        fetch(rota)
            .then(response => response.json())
            .then(data => {
                console.log(data)
                data.forEach(item => {
                    let listItem = document.createElement('li')
                    listItem.classList.add('list-group-item')
                    listItem.innerHTML = item.id + ' - ' + item.name + ' - R$' + item.cost
                    listItem.addEventListener('click', (e) =>{
                        console.log('opa')
                        const formData = new FormData();
                        formData.append('search', item.id);

                        fetch('cart/store', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => console.log(data))
                        .catch(error => console.error('Error:', error));
                    })
                    resultsField.appendChild(listItem)
                });
            })
    }, 500);
    resultsField.classList.remove('d-none')


})
