window.onload = function () {

    // Variables
    let typeCss = document.getElementById('type-css');
    let typeJs = document.getElementById('type-js');
    let minifyBtn = document.getElementById('minify-btn');
    let typeHidden = document.getElementById('type-hidden');
    let postForm = document.getElementById('post-form');

    let InputContentForm = document.getElementById('input-content-form');

    let OutputContentForm = document.getElementById('output-content-form');
    let OutputContentFormBtn = document.getElementById('output-content-form-btn');

    let Derror = document.getElementById('d-error');

    let TypeHidden = document.getElementById('type-hidden');

    // Toggle submit btn
    function toggleBtn(type) {
        if (type.className.indexOf('active') != -1) {
            minifyBtn.innerText = 'Minify css';
        } else {
            minifyBtn.innerText = 'Minify js';
        }
    }

    // Toggle radio btn active class
    function toggleRadioBtn(type1, type2) {
        type1.classList.remove('active');
        type2.classList.add('active');

        minifyBtn.innerText = 'Minify ' + type2.innerText.toLowerCase();
        typeHidden.setAttribute('value', type2.innerText.toLowerCase());
        postForm.setAttribute('action', '/' + type2.innerText.toLowerCase())
    }

    // Validate input
    function validateInput(input) {
        return input.length === 0 || !input.trim() || input.length < 5;
    }

    // Load functions
    if( TypeHidden.value === 'css' )
    {
        toggleBtn(typeCss);
        toggleRadioBtn(typeJs, typeCss);
    }else{
        toggleBtn(typeJs);
        toggleRadioBtn(typeCss, typeJs);
    }

    // Events
    typeCss.addEventListener('click', function (e) {
        toggleRadioBtn(typeJs, typeCss);
    });

    typeJs.addEventListener('click', function (e) {
        toggleRadioBtn(typeCss, typeJs);
    });

    InputContentForm.addEventListener('keyup', function (e) {

        Derror.classList.add('d-none');

        if (InputContentForm.value.length <= 0) {
            OutputContentForm.setAttribute('disabled', true);
            OutputContentFormBtn.setAttribute('disabled', true);
        }
        InputContentForm.classList.remove('is-invalid');
    });

    minifyBtn.addEventListener('click', function (e) {

        let flag = validateInput(InputContentForm.value);
        if (flag) {
            OutputContentForm.setAttribute('disabled', true);
            OutputContentFormBtn.setAttribute('disabled', true);
            InputContentForm.classList.add('is-invalid');

        } else {
            minifyBtn.setAttribute('type', 'submit');
        }
    });

    OutputContentFormBtn.addEventListener('click', function (e) {
        OutputContentForm.select();
    });

};