(() => {
  'use strict';

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation');
  console.log(forms);
  // Loop over them and prevent submission
  Array.from(forms).forEach((form) => {
    console.log(form);
    form.addEventListener(
      'submit',
      (event) => {
        if (!form.checkValidity()) {
          //vérification des élément required. si l'élément ne respect pas la contraintes renvoi false
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add('was-validated');
      },
      false
    );
  });
})();
