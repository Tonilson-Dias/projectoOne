function showTab(tabName) {
    const tabs = document.querySelectorAll('.tab-content');
    tabs.forEach(tab => {
        tab.classList.remove('active');
    });

    document.getElementById(tabName).classList.add('active');

    const tabButtons = document.querySelectorAll('.tab');
    tabButtons.forEach(button => {
        button.classList.remove('active');
    });

    const activeButton = document.querySelector(`button[onclick="showTab('${tabName}')"]`);
    activeButton.classList.add('active');
}

// Inicializa a aba "publicacoes" como ativa
showTab('publicacoes');
