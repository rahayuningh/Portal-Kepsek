const searchRegionElement = document.getElementById('search-region');

const updateRegionOption = (regions) => {
    searchRegionElement.innerHTML = "<option disabled selected> --Pilih-- </option>";
    regions.forEach(region => {
        searchRegionElement.innerHTML += `<option value="${region.id}">${region.nama}</option>`;
    });
}

document.addEventListener('DOMContentLoaded', function () {
    const url = "http://dev.farizdotid.com/api/daerahindonesia/provinsi";
    fetch(url)
        .then(response => {
            return response.json();
        })
        .then(responseJson => {
            console.log(responseJson);
            updateRegionOption(responseJson.semuaprovinsi);
        })
        .catch(error => {
            console.log(error);
        });
});
