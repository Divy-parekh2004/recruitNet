const skillField = document.getElementById("skillField");
const skillsInput = document.getElementById("skillsInput");
const hiddenInput = document.getElementById("skillsHidden");

let skills = [];

skillField.addEventListener("keydown", function(e) {
    if (e.key === "Enter" || e.key === " ") {
        e.preventDefault();

        let skill = skillField.value.trim();
        if (skill !== "" && !skills.includes(skill)) {
            addSkill(skill);
            skills.push(skill);
            updateHidden();
        }

        skillField.value = "";
    }

     if (e.key === "Backspace" && skillField.value === "") {
        const tags = document.querySelectorAll(".skill-tag");
        if (tags.length > 0) {
            const lastTag = tags[tags.length - 1];
            const text = lastTag.firstChild.textContent.trim();

            lastTag.remove();
            skills = skills.filter(s => s !== text);
            updateHidden();
        }
    }
});

function addSkill(skill) {
    const tag = document.createElement("div");
    tag.classList.add("skill-tag");
    tag.innerHTML = `
        ${skill}
        <span class="remove">&times;</span>
    `;

    tag.querySelector(".remove").addEventListener("click", function() {
        tag.remove();
        skills = skills.filter(s => s !== skill);
        updateHidden();
    });

    skillsInput.insertBefore(tag, skillField);
}

function updateHidden() {
    hiddenInput.value = skills.join(",");
}
