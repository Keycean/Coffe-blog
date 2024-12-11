<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Like System with Backend Persistence</title>
  <style>
    .like-button {
      display: inline-flex;
      align-items: center;
      cursor: pointer;
      background-color: #f0f0f0;
      border: 1px solid #ccc;
          border-radius: 5px;
      padding: 5px 10px;
      font-size: 16px;
    }

    .like-button.liked {
      background-color: #ffd700;
      color: #000;
    }

    .like-count {
      margin-left: 10px;
      font-weight: bold;
    }
  </style>
</head>
<body>

<div class="like-system" data-post-id="1">
  <button class="like-button" onclick="toggleLike(this)">
    👍 Like <span class="like-count">0</span>
  </button>
</div>

<script>
  // Fetch the like count and state on page load
  async function loadLikeState() {
    const postId = document.querySelector('.like-system').getAttribute('data-post-id');
    try {
      const response = await fetch(`like.php?action=get&postId=${postId}`);
      const result = await response.json();

      if (result.success) {
        const button = document.querySelector('.like-button');
        const likeCountSpan = button.querySelector('.like-count');

        likeCountSpan.textContent = result.likes;
        if (result.isLiked) {
          button.classList.add('liked');
        }
      }
    } catch (error) {
      console.error('Error loading like state:', error);
    }
  }

  async function toggleLike(button) {
    const likeCountSpan = button.querySelector('.like-count');
    const postId = button.closest('.like-system').getAttribute('data-post-id');
    let likeCount = parseInt(likeCountSpan.textContent, 10);

    const action = button.classList.contains('liked') ? 'unlike' : 'like';

    // Send request to backend
    try {
      const response = await fetch('like.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ postId, action })
      });

      const result = await response.json();
      if (result.success) {
        // Update UI based on backend response
        if (action === 'like') {
          likeCount++;
          button.classList.add('liked');
        } else {
          likeCount--;
          button.classList.remove('liked');
        }
        likeCountSpan.textContent = likeCount;
      } else {
        console.error('Failed to update like status:', result.message);
      }
    } catch (error) {
      console.error('Error updating like status:', error);
    }
  }

  // Load the like state when the page loads
  document.addEventListener('DOMContentLoaded', loadLikeState);
</script>

</body>
</html>
