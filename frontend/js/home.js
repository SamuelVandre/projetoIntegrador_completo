const modal = document.getElementById('projectModal')
const closeModal = document.getElementById('closeModal')

const carouselImage = document.getElementById('carouselImage')

const title = document.getElementById('projectTitle')
const description = document.getElementById('projectDescription')

const prevBtn = document.querySelector('.prev')
const nextBtn = document.querySelector('.next')

const projectButtons = document.querySelectorAll('.project-overlay button')

const projectsData = [

    {
        title: 'Casa Minimalista',
        description: 'Projeto moderno com integração entre cozinha, sala e área gourmet. A proposta utiliza tons claros e iluminação natural para ampliar os ambientes.',
        images: [
            'https://images.unsplash.com/photo-1494526585095-c41746248156?q=80&w=1970&auto=format&fit=crop',
            'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=1974&auto=format&fit=crop',
            'https://images.unsplash.com/photo-1484154218962-a197022b5858?q=80&w=1974&auto=format&fit=crop'
        ]
    },

    {
        title: 'Apartamento Elegante',
        description: 'Ambientes planejados para unir sofisticação e conforto. O projeto prioriza texturas naturais, madeira e iluminação indireta.',
        images: [
            'https://images.unsplash.com/photo-1484154218962-a197022b5858?q=80&w=1974&auto=format&fit=crop',
            'https://images.unsplash.com/photo-1494526585095-c41746248156?q=80&w=1970&auto=format&fit=crop',
            'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=1974&auto=format&fit=crop'
        ]
    },

    {
        title: 'Interior Contemporâneo',
        description: 'Projeto focado em conforto visual, integração dos espaços e valorização da iluminação natural em todos os ambientes.',
        images: [
            'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=1974&auto=format&fit=crop',
            'https://images.unsplash.com/photo-1484154218962-a197022b5858?q=80&w=1974&auto=format&fit=crop',
            'https://images.unsplash.com/photo-1494526585095-c41746248156?q=80&w=1970&auto=format&fit=crop'
        ]
    }

]

let currentProject = 0
let currentImage = 0

function updateCarousel() {

    carouselImage.src =
        projectsData[currentProject].images[currentImage]

}

function openModal(index) {

    currentProject = index
    currentImage = 0

    title.textContent =
        projectsData[index].title

    description.textContent =
        projectsData[index].description

    updateCarousel()

    modal.classList.add('active')

    document.body.classList.add('modal-open')

}

function closeProjectModal() {

    modal.classList.remove('active')

    document.body.classList.remove('modal-open')

}

projectButtons.forEach((button, index) => {

    button.addEventListener('click', () => {
        openModal(index)
    })

})

closeModal.addEventListener('click', closeProjectModal)

modal.addEventListener('click', (e) => {

    if (e.target === modal) {
        closeProjectModal()
    }

})

nextBtn.addEventListener('click', () => {

    currentImage++

    if (currentImage >= projectsData[currentProject].images.length) {
        currentImage = 0
    }

    updateCarousel()

})

prevBtn.addEventListener('click', () => {

    currentImage--

    if (currentImage < 0) {
        currentImage =
            projectsData[currentProject].images.length - 1
    }

    updateCarousel()

})