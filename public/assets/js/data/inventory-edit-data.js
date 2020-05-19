const searchBuildingElement = document.getElementById('search-building');
const searchRoomElement = document.getElementById('search-room');

const updateOption = (rooms) => {
    searchRoomElement.innerHTML = "<option disabled selected> --Pilih--</option>";
    rooms.forEach(room => {
        searchRoomElement.innerHTML += `<option value="${room.id}">${room.nama_ruangan}</option>`;
    });
}

const getRoom = () => {
    searchRoomElement.innerHTML = "<option disabled selected>Loading ...</option>";

    const url = "/api/get-rooms";
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
            "building": searchBuildingElement.value,
        })
    };

    fetch(url, option)
        .then(response => {
            return response.json();
        })
        .then(responseJson => {
            updateOption(responseJson.rooms);
        })
        .catch(error => {
            console.log(error);
        });
};

document.addEventListener('DOMContentLoaded', function () {
    searchBuildingElement.addEventListener('change', getRoom);
});
