const body = document.body;

const oldHTML = body.innerHTML;

const newHTML = `<div class="w-1/4 shadow-lg fixed top-0 mx-auto inset-x-0 rounded-lg bg-white p-4 text-center mb-4">Successfully logged in</div>`;

body.innerHTML = newHTML + body.innerHTML;

const timeout = setTimeout(() => {
    body.innerHTML = oldHTML;
}, 2000);

