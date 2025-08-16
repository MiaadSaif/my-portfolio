document.addEventListener("DOMContentLoaded", function() {
    const projects = {
        1: {
            title: "MUAIN CRM",
            desc: "CRM system with Laravel 8, AJAX, MySQL, Payment Integration.",
            images: ["/images/muain1.png", "/images/muain2.png"]
        },
        2: {
            title: "AI WhatsApp Chatbot",
            desc: "AI-powered chatbot using OpenAI API and WhatsApp Business API.",
            images: ["/images/chatbot1.png", "/images/chatbot2.png"]
        },
        3: {
            title: "Car Rental System",
            desc: "Flutter frontend + Laravel backend for managing rentals.",
            images: ["/images/car1.png", "/images/car2.png"]
        }
    };

    const modal = document.getElementById("projectModal");
    const modalTitle = document.getElementById("modalTitle");
    const modalDesc = document.getElementById("modalDesc");
    const modalImages = document.getElementById("modalImages");
    const closeBtn = document.querySelector(".close");

    document.querySelectorAll(".project-card").forEach(card => {
        card.addEventListener("click", () => {
            let id = card.getAttribute("data-id");
            let proj = projects[id];
            modalTitle.textContent = proj.title;
            modalDesc.textContent = proj.desc;
            modalImages.innerHTML = "";
            proj.images.forEach(src => {
                let img = document.createElement("img");
                img.src = src;
                modalImages.appendChild(img);
            });
            modal.style.display = "block";
        });
    });

    closeBtn.onclick = () => modal.style.display = "none";
    window.onclick = (e) => { if (e.target == modal) modal.style.display = "none"; }
});
