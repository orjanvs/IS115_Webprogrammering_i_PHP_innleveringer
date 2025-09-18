function loadContent(page) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', page, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.querySelector('.content').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

// Define modules and their oppgaver
const modules = [
       {
        name: 'Modul 3',
        tasks: [
            { name: 'Oppgave 3.1', file: 'oppg3_1.php' },
            { name: 'Oppgave 3.2', file: 'oppg3_2.php' },
            { name: 'Oppgave 3.3', file: 'oppg3_3.php' },
            { name: 'Oppgave 3.4', file: 'oppg3_4.php' },
            { name: 'Oppgave 3.5', file: 'oppg3_5.php' }
        ]
    },
    {
        name: 'Modul 2',
        tasks: [
            { name: 'Oppgave 2.1', file: 'oppg2_1.php' },
            { name: 'Oppgave 2.2', file: 'oppg2_2.php' },
            { name: 'Oppgave 2.3', file: 'oppg2_3.php' },
            { name: 'Oppgave 2.4', file: 'oppg2_4.php' },
            { name: 'Oppgave 2.5', file: 'oppg2_5.php' }
        ]
    },
        {
        name: 'Modul 1',
        tasks: [
            { name: 'Oppgave 1.1', file: 'oppg1_1.php' },
            { name: 'Oppgave 1.2', file: 'oppg1_2.php' },
            { name: 'Oppgave 1.3', file: 'oppg1_3.php' },
            { name: 'Oppgave 1.4', file: 'oppg1_4.php' },
            { name: 'Oppgave 1.5', file: 'oppg1_5.php' }
        ]
    }
];

function showModules() {
    const sidebar = document.getElementById('sidebar');
    sidebar.innerHTML = '';
    modules.forEach((mod, idx) => {
        const a = document.createElement('a');
        a.href = '#';
        a.textContent = mod.name;
        a.addEventListener('click', function(e) {
            e.preventDefault();
            showTasks(idx);
        });
        sidebar.appendChild(a);
    });
}

function showTasks(moduleIdx) {
    const sidebar = document.getElementById('sidebar');
    sidebar.innerHTML = '';
    // Back button
    const back = document.createElement('a');
    back.href = '#';
    back.textContent = '← Tilbake til moduler';
    back.addEventListener('click', function(e) {
        e.preventDefault();
        showModules();
        document.querySelector('.content').innerHTML = '<h1>PHP Innleveringer for Ørjan Vikingstad Stueland</h1>';
    });
    sidebar.appendChild(back);
    // List tasks
    modules[moduleIdx].tasks.forEach(task => {
        const a = document.createElement('a');
        a.href = task.file;
        a.textContent = task.name;
        a.addEventListener('click', function(e) {
            e.preventDefault();
            loadContent(task.file);
        });
        sidebar.appendChild(a);
    });
}

window.onload = function() {
    showModules();
    document.querySelector('.content').innerHTML = '<h1>PHP Innleveringer for Ørjan Vikingstad Stueland</h1>';
};