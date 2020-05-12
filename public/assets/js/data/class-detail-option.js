const searchYearElement = document.getElementById('search-year');
const serchClassElement = document.getElementById('search-class');

const updateClassOption = (classes) => {
    serchClassElement.innerHTML = "";
    classes.forEach(item => {
        serchClassElement.innerHTML += `<button class="tab-link btn btn-inverse-info btn-icon mb-1 mr-1">${item.kode_kelas}</button>`;
    });
}

const getClass = () => {
    serchClassElement.innerHTML = "Loading ...";

    const url = "/api/get-classes";
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    let option = {
        method: "POST",
        credentials: "same-origin",
        headers: {
            'Content-Type': 'application/json',
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-Token": token
        },
        body: JSON.stringify({
            "year": searchYearElement.value,
        })
    };

    fetch(url, option)
        .then(response => {
            return response.json();
        })
        .then(responseJson => {
            updateClassOption(responseJson.classes);
        })
        .catch(error => {
            console.log(error);
        });
};

document.addEventListener('DOMContentLoaded', function () {
    searchYearElement.addEventListener('change', getClass);
});
