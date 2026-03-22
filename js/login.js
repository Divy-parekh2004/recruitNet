 function setRole(role) {
        document.getElementById('userType').value = role;

        document.getElementById('candidateBtn').classList.remove('active');
        document.getElementById('companyBtn').classList.remove('active');

        if (role === 'candidate') {
            document.getElementById('candidateBtn').classList.add('active');
        } else {
            document.getElementById('companyBtn').classList.add('active');
        }
    }