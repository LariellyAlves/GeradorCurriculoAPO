document.addEventListener('DOMContentLoaded', function() {
    var btnAddFormacao = document.querySelector('.btn_add_formacao');
    var formacaoContainer = document.getElementById('formacaoContainer');

    if (btnAddFormacao && formacaoContainer) {
        btnAddFormacao.addEventListener('click', function() {
            var template = document.getElementById('template_formacao');
            if (template) {
                var clone = template.content.cloneNode(true);
                formacaoContainer.appendChild(clone);
            } else {
                console.error('Template "template_formacao" não encontrado.');
            }
        });
    } else {
        console.error('Elementos ".btn_add_formacao" ou "#formacaoContainer" não encontrados.');
    }

    var btnAddExperiencia = document.querySelector('.btn_add_experiencia');
    var experienciasContainer = document.getElementById('experienciasContainer');

    if (btnAddExperiencia && experienciasContainer) {
        btnAddExperiencia.addEventListener('click', function() {
            var template = document.getElementById('template_experiencia');
            if (template) {
                var clone = template.content.cloneNode(true);
                experienciasContainer.appendChild(clone);
            } else {
                console.error('Template "template_experiencia" não encontrado.');
            }
        });
    } else {
        console.error('Elementos ".btn_add_experiencia" ou "#experienciasContainer" não encontrados.');
    }
});
