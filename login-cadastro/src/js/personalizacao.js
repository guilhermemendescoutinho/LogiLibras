// BOTAO AVATAR/FOTO

const avatar = document.querySelector('.btn-avatar')
const foto = document.querySelector('.btn-foto')
const carrossel = document.querySelectorAll('.carrossel')
const imagem = document.querySelector('[name=imagem]')

avatar.addEventListener('click', ()=>{
    esconder(carrossel[1])
    mostrar(carrossel[0])
})

foto.addEventListener('click', ()=>{
    esconder(carrossel[0])
    mostrar(carrossel[1])
})

function esconder(painel){
    painel.classList.add('esconder-painel')
}

function mostrar(painel){
    painel.classList.remove('esconder-painel')
}


// IMAGEM SELECIONADA

const botoes = document.querySelectorAll('.imagem')

botoes.forEach((botao)=>{
    botao.addEventListener('click', (e)=>{
        e.preventDefault()
        removerSelecionado()
        botao.classList.add('imagem-selecionada')
        imagem.value = botao.name
    })
})

function removerSelecionado(){
    let selecionado = document.querySelector('.imagem-selecionada')
    selecionado.classList.remove('imagem-selecionada')
}