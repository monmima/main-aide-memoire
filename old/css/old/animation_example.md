# Creating a simple spin keyframe animation
    
    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    .test {
        animation: spin 3s infinite;
        background-color: lightgreen;
        height: 10px;
        width: 100px;
    }