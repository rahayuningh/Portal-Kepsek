const searchYearElement = document.getElementById('search-year');
const searchClassElement = document.getElementById('search-class');
const yearElement = document.getElementById('year');
const classElement = document.getElementById('class');
const teacherElement = document.getElementById('teacher');
const studentTableElement = document.getElementById('student-table-body');

const updateClassDetail = (classDetail, students) => {
    yearElement.innerHTML = classDetail.year;
    classElement.innerHTML = classDetail.code;
    teacherElement.innerHTML = `<a href="/pegawai/guru/${classDetail.teacher_id}/biodata">${classDetail.teacher_name}</a>`;

    studentTableElement.innerHTML = "";
    let counter = 1;
    students.forEach(student => {
        studentTableElement.innerHTML += `
        <tr>
            <td>${counter}</td>
            <td>
                <a href="/siswa/${student.id}">
                    ${student.name}
                </a>
            </td>
            <td>${student.nisn}</td>
        </tr>
        `;
        counter++;
    });
};

const loadClass = classId => {
    studentTableElement.innerHTML = "Loading ...";
    const url = "/api/class/detail";
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
            "id": classId,
        })
    };

    fetch(url, option)
        .then(response => {
            return response.json();
        })
        .then(responseJson => {
            updateClassDetail(responseJson.class, responseJson.students);
        })
        .catch(error => {
            console.log(error);
            console.log('Error when fetching detail of class');
            studentTableElement.innerHTML = `<tr><td class="text-center" colspan="3">Fail fetching data :(</td></tr>`
        });
};

const updateClassOption = (classes) => {
    searchClassElement.innerHTML = "";
    classes.forEach(item => {
        searchClassElement.innerHTML += `<a class="btn btn-inverse-info btn-sm mb-1 mr-1 btn-class" role="button" id="${item.id}">${item.kode_kelas}</a>`;
    });

    let buttons = document.querySelectorAll(".btn-class");
    buttons.forEach(button => {
        button.addEventListener("click", event => {
            const classId = event.target.id;
            loadClass(classId);
        })
    })
}

const getClass = () => {
    searchClassElement.innerHTML = "Loading ...";

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

searchYearElement.addEventListener('change', getClass);
