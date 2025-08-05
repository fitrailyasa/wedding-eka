<section class="section-container text-start"
    style="
        background-image: url('{{ asset('') }}assets/photo (12).JPG');
        background-size: cover;
      "
    id="comment">
    <div class="overlay-bg"></div>
    <div class="container position-relative">
        <h2 class="section-title text-center animate-text">Wedding Wish</h2>
        <p class="text-center">
            It is an honor and pleasure for us, if you can attend and give us your
            blessing
        </p>

        <!-- Comment Form -->
        <form id="comment-form" class="mb-4 animate-text delay-1">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Input name..."
                    required />
            </div>
            <div class="mb-2">
                <label for="message" class="form-label">Wish</label>
                <textarea id="message" name="message" class="form-control" maxlength="500" rows="3" required
                    placeholder="Input wish..."></textarea>
                <small id="char-count" class="small">max: 500 character</small>
            </div>
            <button type="submit" class="btn btn-light rounded-pill px-4 mt-2 animate__animated animate__pulse">
                Send →
            </button>
        </form>

        <!-- Comment List -->
        <div id="comment-list">
            <!-- Comments will appear here -->
        </div>
    </div>
</section>
