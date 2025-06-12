<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../../styles/user-css/user-profile.css">
</head>
<body>

<div class="container">
    <h1>Edit Profile</h1>
    <form id="editProfileForm" enctype="multipart/form-data">
        <div class="profile-picture-container">
            <img class="profile-picture" id="profilePicture" src="https://via.placeholder.com/100" alt="User  Profile Picture" onclick="toggleZoom()">
            <input type="file" id="profilePictureInput" name="profilePicture" accept="image/*" style="display: none;">
            <div>
                <button type="button" class="change-picture-button" id="changePictureButton" onclick="document.getElementById('profilePictureInput').click();">Change Profile Picture</button>
                <button type="button" id="removeProfilePicture" class="remove-button" onclick="confirmRemoveProfilePicture()">Remove Profile Picture</button>
            </div>
        </div>

        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="John Doe" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="john.doe@example.com" required>

        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="johndoe123" required>

        <label for="bio">Bio</label>
        <textarea id="bio" name="bio" rows="4" required>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</textarea>

        <div class="button-container">
            <button type="button" class="back-button" onclick="window.location.href='user-dashboard.php';">Back to Dashboard</button>
            <button type="submit" class="save-button">Save Changes</button>
        </div>
    </form>
</div>

<script>
    const profilePictureInput = document.getElementById('profilePictureInput');
    const profilePicture = document.getElementById('profilePicture');
    const removeProfilePictureButton = document.getElementById('removeProfilePicture');
    const changePictureButton = document.getElementById('changePictureButton');

    let isZoomed = false; // Track zoom state

    profilePictureInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                profilePicture.src = event.target.result;
                changePictureButton.style.display = 'block'; // Show change button
                removeProfilePictureButton.style.display = 'block'; // Show remove button
            };
            reader.readAsDataURL(file);
        }
    });

    function confirmRemoveProfilePicture() {
        const confirmation = confirm("Are you sure you want to remove your profile picture?");
        if (confirmation) {
            removeProfilePicture();
        }
    }

    function removeProfilePicture() {
        profilePicture.src = 'https://via.placeholder.com/100'; // Reset to default image
        profilePictureInput.value = ''; // Clear file input
        changePictureButton.style.display = 'none'; // Hide change button
        removeProfilePictureButton.style.display = 'none'; // Hide remove button
        if (isZoomed) {
            toggleZoom(); // Reset zoom if currently zoomed
        }
    }

    document.getElementById('editProfileForm').addEventListener('submit', function(event) {
        event.preventDefault();
        // Here you can add code to handle the form submission, e.g., send data to the server
        alert('Profile updated successfully!');
    });

    function toggleZoom() {
        if (isZoomed) {
            profilePicture.style.transform = 'scale(1)'; // Reset to default size
            changePictureButton.style.display = 'none'; // Hide change button
            removeProfilePictureButton.style.display = 'none'; // Hide remove button
        } else {
            profilePicture.style.transform = 'scale(2)'; // Zoom effect
            changePictureButton.style.display = 'block'; // Show change button
            removeProfilePictureButton.style.display = 'block'; // Show remove button
        }
        isZoomed = !isZoomed; // Toggle zoom state
    }

    // Reset zoom when clicking anywhere else on the document
    document.addEventListener('click', function(event) {
        if (!profilePicture.contains(event.target) && isZoomed) {
            toggleZoom(); // Reset zoom if clicked outside
        }
    });
</script>

</body>
</html>
