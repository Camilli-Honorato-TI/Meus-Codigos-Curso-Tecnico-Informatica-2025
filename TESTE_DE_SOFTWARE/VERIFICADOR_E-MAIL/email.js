const form = document.getElementById('emailForm');
const input = document.getElementById('email');
const message = document.getElementById('message');

const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

function validateEmail(value) {
    const email = value.trim();
    if (email.length === 0) return { valid: false, reason: 'vazio' };

    if (email.length > 320) return { valid: false, reason: 'muito_grande' };

    if (!emailRegex.test(email)) return { valid: false, reason: 'formato' };

    const [local, domain] = email.split('@');
    if (!local || !domain) return { valid: false, reason: 'formato' };

    if (local.startsWith('.') || local.endsWith('.') ||
        domain.startsWith('.') || domain.endsWith('.'))
        return { valid: false, reason: 'ponto_inicio_fim' };

    if (local.includes('..') || domain.includes('..'))
        return { valid: false, reason: 'pontos_consecutivos' };

    return { valid: true };
}

function updateUI(result) {
    input.classList.remove('input-valid', 'input-invalid');
    message.classList.remove('valid', 'invalid');

    if (result.valid) {
        input.classList.add('input-valid');
        message.textContent = '✅ Formato válido — confirme por e-mail.';
        message.classList.add('valid');
    } else {
        input.classList.add('input-invalid');

        let txt = '❌ E-mail inválido.';
        if (result.reason === 'vazio') txt = 'Preencha o campo de e-mail.';
        else if (result.reason === 'muito_grande') txt = '❌ E-mail muito grande.';
        else if (result.reason === 'formato') txt = '❌ Formato de e-mail inválido.';
        else if (result.reason === 'ponto_inicio_fim') txt = '❌ Não pode ter ponto no início ou no fim.';
        else if (result.reason === 'pontos_consecutivos') txt = '❌ Não pode ter pontos consecutivos.';

        message.textContent = txt;
        message.classList.add('invalid');
    }
}

input.addEventListener('input', () => {
    const res = validateEmail(input.value);
    updateUI(res);
});

form.addEventListener('submit', (ev) => {
    ev.preventDefault();
    const res = validateEmail(input.value);
    updateUI(res);
    if (res.valid) {
        console.log('Email validado no cliente:', input.value);
    }
});
