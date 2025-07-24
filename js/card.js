


  const card = [
    {
      name: "Pawan Mallik",
      img: "images/WhatsApp Image 2025-07-02 at 20.15.29_ce497aac.jpg",
      post: "Web Developer",
      description:
        "Salary Hike after an Online MBA, better position at the organization.",
    },
    {
      name: "Pawan Mallik",
      img: "images/WhatsApp Image 2025-07-02 at 20.15.29_ce497aac.jpg",
      post: "Web Developer",
      description:
        "Salary Hike after an Online MBA, better position at the organization.",
    },
    {
      name: "Pawan Mallik",
      img: "images/WhatsApp Image 2025-07-02 at 20.15.29_ce497aac.jpg",
      post: "Web Developer",
      description:
        "Salary Hike after an Online MBA, better position at the organization.",
    },
    {
      name: "Pawan Mallik",
      img: "images/WhatsApp Image 2025-07-02 at 20.15.29_ce497aac.jpg",
      post: "Web Developer",
      description:
        "Salary Hike after an Online MBA, better position at the organization.",
    },
    {
      name: "Pawan Mallik",
      img: "images/WhatsApp Image 2025-07-02 at 20.15.29_ce497aac.jpg",
      post: "Web Developer",
      description:
        "Salary Hike after an Online MBA, better position at the organization.",
    },
  ];

  const container = document.getElementById("card-container");

  // Add slides dynamically
  card.forEach((item) => {
    const slide = `
      <div class="swiper-slide">
        <div class="card">
          <div class="first-card-details">
            <div class="first-inner">
              <img src="${item.img}" alt="${item.name}">
            </div>
            <div class="second-inner">
              <h1>${item.name}</h1>
              <h1>${item.post}</h1>
            </div>
          </div>
          <div class="second-card-details">
            <h2>${item.description}</h2>
          </div>
        </div>
      </div>
    `;
    container.insertAdjacentHTML("beforeend", slide);
  });

  // Initialize Swiper AFTER adding slides
  const swiper = new Swiper('.swiper', {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 20,
    centeredSlides: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      768: { slidesPerView: 3 },
      480: { slidesPerView: 1 },
    },
  });

