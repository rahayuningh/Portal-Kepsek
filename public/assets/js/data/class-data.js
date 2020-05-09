const searchYearElement = document.getElementById('search-year');
const serchClassElement = document.getElementById('search-class');

const updateClassOption = (classes) => {
    serchClassElement.innerHTML = "<option disabled selected> --Pilih--</option>";
    classes.forEach(item => {
        serchClassElement.innerHTML += `<option value="${item.id}">${item.kode_kelas}</option>`;
    });
}

const getClass = () => {
    serchClassElement.innerHTML = "<option disabled selected>Loading ...</option>";

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
