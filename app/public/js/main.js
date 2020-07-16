const animationCircles = () => {
    const ulCircles = document.querySelector("ul.circles");

    for (let i = 0; i < 11; i++) {

        const li = document.createElement("li");

        const random = (min,max) => Math.random() * (max - min) + min;

        const size = Math.floor(random(200, 50));
        const position = random(1,99);
        const delay = random(5, 0.1);

        li.style.width = `${size}px`;
        li.style.height = `${size}px`;
        li.style.bottom = `-${size}px`;
        li.style.left = `${position}%`;
        li.style.animationDelay = `${delay}s`;

        ulCircles.appendChild(li);
    }
}

window.addEventListener('load', animationCircles);