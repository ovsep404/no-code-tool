function updatePreview() {
    const name = document.getElementById('name').value;
    const title = document.getElementById('title').value;
    const bio = document.getElementById('bio').value;
    const about = document.getElementById('about').value;
    const location = document.getElementById('location').value;
    const experience = document.getElementById('experience').value;
    const skills = document.getElementById('skills').value.split(',').map(skill => skill.trim());
    const availability = document.getElementById('availability').value;
    const relocation = document.getElementById('relocation').value;
    const education = document.getElementById('education').value;
    const image = document.getElementById('image').files[0];

    document.getElementById('previewName').innerText = name;
    document.getElementById('previewTitle').innerText = title;
    document.getElementById('previewBio').innerText = bio;
    document.getElementById('previewAbout').innerText = about;
    document.getElementById('previewLocation').innerText = location;
    document.getElementById('previewAvailability').innerText = availability;
    document.getElementById('previewRelocation').innerText = relocation;

    const skillsContainer = document.getElementById('previewSkills');
    skillsContainer.innerHTML = '';
    skills.forEach(skill => {
        const skillSpan = document.createElement('span');
        skillSpan.innerText = skill;
        skillsContainer.appendChild(skillSpan);
    });

    const experienceContent = document.getElementById('previewExperienceContent');
    experienceContent.innerHTML = `
        <img src="google.png" alt="Google logo" class="company-logo">
        <div>
            <h4>Full-time Software Engineer</h4>
            <p>${experience}</p>
        </div>
    `;

    const educationContent = document.getElementById('previewEducationContent');
    educationContent.innerHTML = `
        <img src="stanford.png" alt="Stanford University logo" class="school-logo">
        <div>
            <h4>Stanford University</h4>
            <p>${education}</p>
        </div>
    `;

    if (image) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.querySelector('.profile-image').src = e.target.result;
        };
        reader.readAsDataURL(image);
    }
}


function savePortfolio() {
    const name = document.getElementById('name').value;
    const title = document.getElementById('title').value;
    const bio = document.getElementById('bio').value;
    const about = document.getElementById('about').value;
    const location = document.getElementById('location').value;
    const experience = document.getElementById('experience').value;
    const education = document.getElementById('education').value;
    const skills = document.getElementById('skills').value;
    const availability = document.getElementById('availability').value;
    const relocation = document.getElementById('relocation').value;
    const image = document.getElementById('image').value;

    const form = document.createElement('form');
    form.method = 'POST';
    form.action = 'save.php';

    const nameInput = document.createElement('input');
    nameInput.type = 'hidden';
    nameInput.name = 'name';
    nameInput.value = name;
    form.appendChild(nameInput);

    const titleInput = document.createElement('input');
    titleInput.type = 'hidden';
    titleInput.name = 'title';
    titleInput.value = title;
    form.appendChild(titleInput);

    const bioInput = document.createElement('input');
    bioInput.type = 'hidden';
    bioInput.name = 'bio';
    bioInput.value = bio;
    form.appendChild(bioInput);

    const aboutInput = document.createElement('input');
    aboutInput.type = 'hidden';
    aboutInput.name = 'about';
    aboutInput.value = about;
    form.appendChild(aboutInput);

    const locationInput = document.createElement('input');
    locationInput.type = 'hidden';
    locationInput.name = 'location';
    locationInput.value = location;
    form.appendChild(locationInput);

    const experienceInput = document.createElement('input');
    experienceInput.type = 'hidden';
    experienceInput.name = 'experience';
    experienceInput.value = experience;
    form.appendChild(experienceInput);

    const educationInput = document.createElement('input');
    educationInput.type = 'hidden';
    educationInput.name = 'education';
    educationInput.value = education;
    form.appendChild(educationInput);

    const skillsInput = document.createElement('input');
    skillsInput.type = 'hidden';
    skillsInput.name = 'skills';
    skillsInput.value = skills;
    form.appendChild(skillsInput);

    const availabilityInput = document.createElement('input');
    availabilityInput.type = 'hidden';
    availabilityInput.name = 'availability';
    availabilityInput.value = availability;
    form.appendChild(availabilityInput);

    const relocationInput = document.createElement('input');
    relocationInput.type = 'hidden';
    relocationInput.name = 'relocation';
    relocationInput.value = relocation;
    form.appendChild(relocationInput);

    const imageInput = document.createElement('input');
    imageInput.type = 'hidden';
    imageInput.name = 'image';
    imageInput.value = image;
    form.appendChild(imageInput);

    document.body.appendChild(form);
    form.submit();
}

