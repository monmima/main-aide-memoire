## Triggering a Bootstrap modal through JS

1. Go to /public/index.html
1. Add these lines to link Bootstrap to your project with a CDN:

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

1. Add this to your component:

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Empty form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Make sure the input field is not empty before you click on Submit!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
        <!-- end modal -->

1. Still in your component, use something like this:

        handleSubmit() {
            const INPUT = document.querySelector("input").value;

            let modal = new window.bootstrap.Modal(document.getElementById('exampleModal'), {
            keyboard: false
            });

            // show Pokémon data
            if (INPUT.length > 0) {
            window.location.replace(`/about/${INPUT}`);
            // show empty field warning
            } else {
            console.log("show modal");
            modal.show();
            }

        },

1. The idea is to use <code>window.bootstrap</code> instead of just <code>bootstrap</code> when you create an instance of a Bootstrap modal. Creating an instance of a Bootstrap modal is a necessity if you want to control it via JS.