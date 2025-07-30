// 假设这里有一个存储评论的数组
var comments = [];

// DOM 加载完成后执行
document.addEventListener("DOMContentLoaded", function() {
    // 加载并显示评论
    loadComments();

    // 提交评论表单
    document.getElementById("comment-form").addEventListener("submit", function(event) {
        event.preventDefault(); // 阻止表单默认提交行为

        var commentInput = document.getElementById("comment-input");
        var commentText = commentInput.value.trim();

        if (commentText !== "") {
            // 将评论添加到数组中
            comments.push(commentText);

            // 清空评论输入框
            commentInput.value = "";

            // 重新加载并显示评论
            loadComments();
        }
    });
});

// 加载并显示评论
function loadComments() {
    var commentsList = document.getElementById("comments-list");
    commentsList.innerHTML = ""; // 清空评论列表

    // 将数组中的评论动态插入到评论列表中
    comments.forEach(function(comment) {
        var li = document.createElement("li");
        li.textContent = comment;
        commentsList.appendChild(li);
    });
}