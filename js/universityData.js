function randomRating() { return Math.floor(Math.random() * 5) + 1; }
    const imgPlaceholder = "https://cdn-icons-png.flaticon.com/512/3135/3135715.png";

    const postGraduateCourses = [
      { title: "MBA in Business Analytics", duration: "2 Years | 12 Streams", img: "img.png", rating: randomRating() },
      { title: "MSc in Data Science", duration: "2 Years | 8 Streams", img: "img.png", rating: randomRating() },
      { title: "Masters in Cybersecurity", duration: "2 Years | 5 Streams", img: "img.png", rating: randomRating() },
      { title: "MBA in Digital Marketing", duration: "18 Months | 6 Streams", img: "img.png", rating: randomRating() },
      { title: "Executive MBA", duration: "1 Year | 4 Streams", img: "img.png", rating: randomRating() },
      { title: "MBA in Finance", duration: "2 Years | 6 Streams", img: "img.png", rating: randomRating() },
      { title: "MSc in AI", duration: "2 Years | 5 Streams", img: "img.png", rating: randomRating() },
      { title: "Masters in Cloud Computing", duration: "2 Years | 3 Streams", img: "img.png", rating: randomRating() },
      { title: "MBA in Business Analytics", duration: "2 Years | 12 Streams", img: "img.png", rating: randomRating() },
      { title: "MSc in Data Science", duration: "2 Years | 8 Streams", img: "img.png", rating: randomRating() },
      { title: "Masters in Cybersecurity", duration: "2 Years | 5 Streams", img: "img.png", rating: randomRating() },
      { title: "MBA in Digital Marketing", duration: "18 Months | 6 Streams", img: "img.png", rating: randomRating() },
      { title: "Executive MBA", duration: "1 Year | 4 Streams", img: "img.png", rating: randomRating() },
      { title: "MBA in Finance", duration: "2 Years | 6 Streams", img: "img.png", rating: randomRating() },
      { title: "MSc in AI", duration: "2 Years | 5 Streams", img: "img.png", rating: randomRating() },
      { title: "Masters in Cloud Computing", duration: "2 Years | 3 Streams", img: "img.png", rating: randomRating() }
    ];

    const undergraduateCourses = [
      { title: "BSc in Computer Science", duration: "3 Years | 10 Streams", img: "img.png", rating: randomRating() },
      { title: "BBA in International Business", duration: "3 Years | 5 Streams", img: "img.png", rating: randomRating() },
      { title: "BEng in Software Engineering", duration: "4 Years | 7 Streams", img: "img.png", rating: randomRating() },
      { title: "BA in Media & Communication", duration: "3 Years | 3 Streams", img: "img.png", rating: randomRating() },
      { title: "BSc in IT", duration: "3 Years | 6 Streams", img: "img.png", rating: randomRating() },
      { title: "BSc in Computer Science", duration: "3 Years | 10 Streams", img: "img.png", rating: randomRating() },
      { title: "BBA in International Business", duration: "3 Years | 5 Streams", img: "img.png", rating: randomRating() },
      { title: "BEng in Software Engineering", duration: "4 Years | 7 Streams", img: "img.png", rating: randomRating() },
      { title: "BA in Media & Communication", duration: "3 Years | 3 Streams", img: "img.png", rating: randomRating() },
      { title: "BSc in IT", duration: "3 Years | 6 Streams", img: "img.png", rating: randomRating() },
      { title: "BSc in Computer Science", duration: "3 Years | 10 Streams", img: "img.png", rating: randomRating() },
      { title: "BBA in International Business", duration: "3 Years | 5 Streams", img: "img.png", rating: randomRating() },
      { title: "BEng in Software Engineering", duration: "4 Years | 7 Streams", img: "img.png", rating: randomRating() },
      { title: "BA in Media & Communication", duration: "3 Years | 3 Streams", img: "img.png", rating: randomRating() },
      { title: "BSc in IT", duration: "3 Years | 6 Streams", img: "img.png", rating: randomRating() },
      { title: "BSc in Computer Science", duration: "3 Years | 10 Streams", img: "img.png", rating: randomRating() },
      { title: "BBA in International Business", duration: "3 Years | 5 Streams", img: "img.png", rating: randomRating() },
      { title: "BEng in Software Engineering", duration: "4 Years | 7 Streams", img: "img.png", rating: randomRating() },
      { title: "BA in Media & Communication", duration: "3 Years | 3 Streams", img: "img.png", rating: randomRating() },
      { title: "BSc in IT", duration: "3 Years | 6 Streams", img: "img.png", rating: randomRating() }
    ];

    const certificationCourses = [
      { title: "Full-Stack Web Development Bootcamp", duration: "12 Weeks | 1 Track", img: "img.png", rating: randomRating() },
      { title: "AWS Cloud Practitioner", duration: "6 Weeks | 1 Track", img: "img.png", rating: randomRating() },
      { title: "Certified Ethical Hacker (CEH)", duration: "10 Weeks | 1 Track", img: "img.png", rating: randomRating() },
      { title: "Google Data Analytics Certificate", duration: "8 Weeks | 1 Track", img: "img.png", rating: randomRating() },
      { title: "Full-Stack Web Development Bootcamp", duration: "12 Weeks | 1 Track", img: "img.png", rating: randomRating() },
      { title: "AWS Cloud Practitioner", duration: "6 Weeks | 1 Track", img: "img.png", rating: randomRating() },
      { title: "Certified Ethical Hacker (CEH)", duration: "10 Weeks | 1 Track", img: "img.png", rating: randomRating() },
      { title: "Google Data Analytics Certificate", duration: "8 Weeks | 1 Track", img: "img.png", rating: randomRating() },
      { title: "Full-Stack Web Development Bootcamp", duration: "12 Weeks | 1 Track", img: "img.png", rating: randomRating() },
      { title: "AWS Cloud Practitioner", duration: "6 Weeks | 1 Track", img: "img.png", rating: randomRating() },
      { title: "Certified Ethical Hacker (CEH)", duration: "10 Weeks | 1 Track", img: "img.png", rating: randomRating() },
      { title: "Google Data Analytics Certificate", duration: "8 Weeks | 1 Track", img: "img.png", rating: randomRating() },
      { title: "Full-Stack Web Development Bootcamp", duration: "12 Weeks | 1 Track", img: "img.png", rating: randomRating() },
      { title: "AWS Cloud Practitioner", duration: "6 Weeks | 1 Track", img: "img.png", rating: randomRating() },
      { title: "Certified Ethical Hacker (CEH)", duration: "10 Weeks | 1 Track", img: "img.png", rating: randomRating() },
      { title: "Google Data Analytics Certificate", duration: "8 Weeks | 1 Track", img: "img.png", rating: randomRating() },
      { title: "Full-Stack Web Development Bootcamp", duration: "12 Weeks | 1 Track", img: "img.png", rating: randomRating() },
      { title: "AWS Cloud Practitioner", duration: "6 Weeks | 1 Track", img: "img.png", rating: randomRating() },
      { title: "Certified Ethical Hacker (CEH)", duration: "10 Weeks | 1 Track", img: "img.png", rating: randomRating() },
      { title: "Google Data Analytics Certificate", duration: "8 Weeks | 1 Track", img: "img.png", rating: randomRating() }
    ];

    const advancedDiplomaCourses = [
      { title: "Diploma in AI", duration: "1 Year | 3 Tracks", img: "img.png", rating: randomRating() },
      { title: "Diploma in Cloud & DevOps", duration: "1 Year | 2 Tracks", img: "img.png", rating: randomRating() },
      { title: "Diploma in Animation", duration: "18 Months | 4 Tracks", img: "img.png", rating: randomRating() },
      { title: "Diploma in Digital Finance", duration: "1 Year | 2 Tracks", img: "img.png", rating: randomRating() },
      { title: "Diploma in AI", duration: "1 Year | 3 Tracks", img: "img.png", rating: randomRating() },
      { title: "Diploma in Cloud & DevOps", duration: "1 Year | 2 Tracks", img: "img.png", rating: randomRating() },
      { title: "Diploma in Animation", duration: "18 Months | 4 Tracks", img: "img.png", rating: randomRating() },
      { title: "Diploma in Digital Finance", duration: "1 Year | 2 Tracks", img: "img.png", rating: randomRating() },
      { title: "Diploma in AI", duration: "1 Year | 3 Tracks", img: "img.png", rating: randomRating() },
      { title: "Diploma in Cloud & DevOps", duration: "1 Year | 2 Tracks", img: "img.png", rating: randomRating() },
      { title: "Diploma in Animation", duration: "18 Months | 4 Tracks", img: "img.png", rating: randomRating() },
      { title: "Diploma in Digital Finance", duration: "1 Year | 2 Tracks", img: "img.png", rating: randomRating() },
      { title: "Diploma in AI", duration: "1 Year | 3 Tracks", img: "img.png", rating: randomRating() },
      { title: "Diploma in Cloud & DevOps", duration: "1 Year | 2 Tracks", img: "img.png", rating: randomRating() },
      { title: "Diploma in Animation", duration: "18 Months | 4 Tracks", img: "img.png", rating: randomRating() },
      { title: "Diploma in Digital Finance", duration: "1 Year | 2 Tracks", img: "img.png", rating: randomRating() },
      { title: "Diploma in AI", duration: "1 Year | 3 Tracks", img: "img.png", rating: randomRating() },
      { title: "Diploma in Cloud & DevOps", duration: "1 Year | 2 Tracks", img: "img.png", rating: randomRating() },
      { title: "Diploma in Animation", duration: "18 Months | 4 Tracks", img: "img.png", rating: randomRating() },
      { title: "Diploma in Digital Finance", duration: "1 Year | 2 Tracks", img: "img.png", rating: randomRating() }
    ];

    const studyAbroadCourses = [
      { title: "International MBA (UK)", duration: "1 Year | Global Streams", img: "img.png", rating: randomRating() },
      { title: "BSc in AI (Canada)", duration: "4 Years | Co-op", img: "img.png", rating: randomRating() },
      { title: "Diploma in Hospitality (Australia)", duration: "2 Years | Hotel Mgmt", img: "img.png", rating: randomRating() },
      { title: "Masters in Robotics (Germany)", duration: "2 Years | Automation", img: "img.png", rating: randomRating() },
      { title: "International MBA (UK)", duration: "1 Year | Global Streams", img: "img.png", rating: randomRating() },
      { title: "BSc in AI (Canada)", duration: "4 Years | Co-op", img: "img.png", rating: randomRating() },
      { title: "Diploma in Hospitality (Australia)", duration: "2 Years | Hotel Mgmt", img: "img.png", rating: randomRating() },
      { title: "Masters in Robotics (Germany)", duration: "2 Years | Automation", img: "img.png", rating: randomRating() },
      { title: "International MBA (UK)", duration: "1 Year | Global Streams", img: "img.png", rating: randomRating() },
      { title: "BSc in AI (Canada)", duration: "4 Years | Co-op", img: "img.png", rating: randomRating() },
      { title: "Diploma in Hospitality (Australia)", duration: "2 Years | Hotel Mgmt", img: "img.png", rating: randomRating() },
      { title: "Masters in Robotics (Germany)", duration: "2 Years | Automation", img: "img.png", rating: randomRating() },
      { title: "International MBA (UK)", duration: "1 Year | Global Streams", img: "img.png", rating: randomRating() },
      { title: "BSc in AI (Canada)", duration: "4 Years | Co-op", img: "img.png", rating: randomRating() },
      { title: "Diploma in Hospitality (Australia)", duration: "2 Years | Hotel Mgmt", img: "img.png", rating: randomRating() },
      { title: "Masters in Robotics (Germany)", duration: "2 Years | Automation", img: "img.png", rating: randomRating() },
      { title: "International MBA (UK)", duration: "1 Year | Global Streams", img: "img.png", rating: randomRating() },
      { title: "BSc in AI (Canada)", duration: "4 Years | Co-op", img: "img.png", rating: randomRating() },
      { title: "Diploma in Hospitality (Australia)", duration: "2 Years | Hotel Mgmt", img: "img.png", rating: randomRating() },
      { title: "Masters in Robotics (Germany)", duration: "2 Years | Automation", img: "img.png", rating: randomRating() }
    ];

    [postGraduateCourses, undergraduateCourses, certificationCourses, advancedDiplomaCourses, studyAbroadCourses]
      .forEach(arr => arr.forEach(course => { if (!course.img) course.img = imgPlaceholder; }));

    function renderCarousel(selector, courses) {
      const container = document.querySelector(selector);
      container.innerHTML = '';

      // Split courses into pages (8 per page)
      for (let i = 0; i < courses.length; i += 8) {
        const page = document.createElement('div');
        page.className = 'carousel-page';

        courses.slice(i, i + 8).forEach(course => {
          const card = document.createElement('div');
          card.className = 'big-card';
          card.innerHTML = `
            <div class="img-container">
            <img src="${course.img}" alt="">
            <div class="duration">
            <h1>${course.title}</h1>
            <h3>${course.duration}</h3>
            </div>
            </div>
            <div class="stars">
              ${'<span class="fa fa-star"></span>'.repeat(course.rating)}
              ${'<span class="fa fa-star-o"></span>'.repeat(5 - course.rating)}
            </div>
            <div class="bc-to">
              <button>View Universities</button>
              <div class="compare-text">Compare 33+ universities for ${course.title}</div>
            </div>
          `;
          page.appendChild(card);
        });

        container.appendChild(page);
      }
    }

    // Render all carousels
    renderCarousel('.pg-carousel', postGraduateCourses);
    renderCarousel('.ug-carousel', undergraduateCourses);
    renderCarousel('.up-carousel', certificationCourses);
    renderCarousel('.ad-carousel', advancedDiplomaCourses);
    renderCarousel('.sa-carousel', studyAbroadCourses);

    // Tabs logic
    const tabs = document.querySelectorAll('header li');
    const sections = document.querySelectorAll('section > div');
    tabs.forEach((tab, idx) => {
      tab.addEventListener('click', () => {
        tabs.forEach(t => t.classList.remove('active-tab'));
        tab.classList.add('active-tab');
        sections.forEach((s, i) => s.classList.toggle('active', i === idx));
      });
    });

    // Carousel page slide logic
    document.querySelectorAll('section > div').forEach(section => {
      const carousel = section.querySelector('.carousel');
      const left = section.querySelector('.arrow.left');
      const right = section.querySelector('.arrow.right');
      let page = 0;

      right.addEventListener('click', () => {
        const totalPages = carousel.children.length;
        if (page < totalPages - 1) {
          page++;
          carousel.style.transform = `translateX(-${page * 100}%)`;
        }
      });

      left.addEventListener('click', () => {
        if (page > 0) {
          page--;
          carousel.style.transform = `translateX(-${page * 100}%)`;
        }
      });
    });
