# Using conditions for rendering in the front-end

Embedding PHP in HTML

    <div>
        <?php if ($loggedIn) { ?>
            <h1>Welcome User</h1> 
        <?php } else { ?>
            <h1>Welcome Guest</h1>
        <?php } ?>
    </div>

Better-looking embedding in HTML

    <div>
        <?php if ($loggedIn) : ?>
            <h1>Welcome User</h1> 
        <?php else: ?>
            <h1>Welcome Guest</h1> 
        <?php endif; ?>
    </div>
