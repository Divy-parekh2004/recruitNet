const input = document.getElementById("skillInput");
const container = document.getElementById("tagsContainer");
const hidden = document.getElementById("skillsHidden");

let skills = [];

// ✅ LOAD OLD VALUES (EDIT MODE)
if (hidden.value.trim() !== "") {
    skills = hidden.value.split(",").map(s => s.trim());
    renderSkills();
}

input.addEventListener("keydown", function(e) {

    if (e.key === "Enter" || e.key === "," || e.key === " ") {
        e.preventDefault();
        addSkill(input.value.trim());
    }

    if (e.key === "Backspace" && input.value === "") {
        skills.pop();
        renderSkills();
    }
});

function addSkill(text) {
    if (text && !skills.includes(text)) {
        skills.push(text);
        renderSkills();
    }
    input.value = "";
}

function removeSkill(index) {
    skills.splice(index, 1);
    renderSkills();
}

function renderSkills() {
    container.innerHTML = "";

    skills.forEach((skill, index) => {
        const tag = document.createElement("span");
        tag.className = "skill-tag";

        tag.innerHTML = `
            ${skill}
            <span class="remove" onclick="removeSkill(${index})">&times;</span>
        `;

        container.appendChild(tag);
    });

    hidden.value = skills.join(",");
}