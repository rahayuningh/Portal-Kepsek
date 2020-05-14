const receiverElement = document.getElementById('receiver');
const createMessageLink = document.getElementById('create-message');

const updateReceiverOption = (teachers) => {
    receiverElement.innerHTML = "<option disabled selected>Pilih penerima ...</option>";
    teachers.forEach(teacher => {
        receiverElement.innerHTML += `<option value="${teacher.id}">${teacher.name}</option>`;
    });
};

const getReceiver = () => {
    receiverElement.innerHTML = "<option disabled selected>Loading ...</option>";

    const url = "/api/get-teachers";
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    let option = {
        method: "GET",
        credentials: "same-origin",
        headers: {
            'Content-Type': 'application/json',
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-Token": token
        }
    };

    fetch(url, option)
        .then(response => {
            return response.json();
        })
        .then(responseJson => {
            updateReceiverOption(responseJson.teachers);
        })
        .catch(error => {
            console.log(error);
        });
};

createMessageLink.addEventListener('click', getReceiver);
