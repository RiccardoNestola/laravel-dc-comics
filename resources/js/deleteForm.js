const deleteFormElement = document.querySelectorAll('form.form-delete');

deleteFormElement.forEach((formElement) => {
formElement.addEventListener('submit', function (e) {
    e.preventDefault();
    const formElementName = formElement.getAttribute('data-element-name');
    const confirmPopUp = window.confirm(`Sei sicuro di eliminare ${formElementName}?`);
    if (confirmPopUp) this.submit()
    })
});