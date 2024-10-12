document.getElementById('postButton').addEventListener('click', function() {
    const postContent = document.getElementById('postContent').value;

    if (postContent.trim() === '') {
        alert("Please write something before posting.");
        return;
    }

    const postContainer = document.createElement('div');
    postContainer.classList.add('post');

    const postText = document.createElement('p');
    postText.innerText = postContent;

    const reactionsContainer = document.createElement('div');
    reactionsContainer.classList.add('reactions');

    // Like button
    const likeButton = document.createElement('button');
    likeButton.classList.add('reaction-btn');
    let likeCount = 0;
    

    const likeImage = document.createElement('img');
    likeImage.src = 'image/like.png'; 
    likeImage.alt = 'Like'; 
    likeImage.style.width = '20px'; 
    
    const likeText = document.createElement('span');
    likeText.innerText = ` Like (${likeCount})`;
    

    likeButton.appendChild(likeImage);
    likeButton.appendChild(likeText);
    

    likeButton.addEventListener('click', function() {
        likeCount++;
        likeText.innerText = ` Like (${likeCount})`; 
    });
    
  
    document.body.appendChild(likeButton);
    

    // Dislike button
    const dislikeButton = document.createElement('button');
    dislikeButton.innerText = '👎 Dislike (0)';
    dislikeButton.classList.add('reaction-btn');
    let dislikeCount = 0;

    dislikeButton.addEventListener('click', function() {
        dislikeCount++;
        dislikeButton.innerText = `👎 Dislike (${dislikeCount})`;
    });

    // Delete button
    const deleteButton = document.createElement('button');
    deleteButton.innerText = 'Delete';
    deleteButton.classList.add('delete-btn');

    deleteButton.addEventListener('click', function() {
        postContainer.remove();
    });


    reactionsContainer.appendChild(likeButton);
    reactionsContainer.appendChild(dislikeButton);


    postContainer.appendChild(postText);
    postContainer.appendChild(reactionsContainer);
    postContainer.appendChild(deleteButton);


    document.getElementById('postsContainer').appendChild(postContainer);


    document.getElementById('postContent').value = '';
});
