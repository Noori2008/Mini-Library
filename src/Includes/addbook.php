<html>

<head>
    <link rel="stylesheet" href="../../assets/css/addbook.css">
</head>

<body>
    <div class="card border-0 shadow-sm"
        style="border-radius: 12px; border: 1px solid #E2E8F0 !important; background-color: #FFFFFF;">
        <div class="p-4 border-bottom d-flex justify-content-between align-items-center"
            style="border-color: #E2E8F0 !important;">
            <div class="d-flex align-items-center">
                <i class="bi bi-book me-2 fs-5" style="color: #6B8E61;"></i>
                <h5 class="fw-bold mb-0" style="color: #4A6741;">Add Book</h5>
            </div>
            <a href="inventory.php" class="text-decoration-none small fw-bold" style="color: #6B8E61;">
                Inventory List <i class="bi bi-arrow-right-short"></i>
            </a>
        </div>

        <div class="card-body p-4">
            <form action="save_book_complete.php" method="POST" enctype="multipart/form-data">
                <div class="row g-4">

                    <div class="col-md-12">
                        <label class="form-label small fw-bold text-muted">BOOK TITLE</label>
                        <input type="text" name="bookname" id="bookname"
                            class="form-control bg-light border-0 p-2 shadow-none" placeholder="e.g. Madolduwa"
                            style="border-radius: 8px;" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label small fw-bold text-muted">AUTHOR NAME</label>
                        <input type="text" name="author" id="author"
                            class="form-control bg-light border-0 p-2 shadow-none" placeholder="e.g. James Clear"
                            style="border-radius: 8px;" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label small fw-bold text-muted">ISBN NUMBER</label>
                        <input type="text" name="isbn" id="isbn" class="form-control bg-light border-0 p-2 shadow-none"
                            placeholder="e.g. 978-0735211292" style="border-radius: 8px;">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label small fw-bold text-muted">CATEGORY</label>
                        <select name="category" id="category" class="form-select bg-light border-0 p-2 shadow-none"
                            style="border-radius: 8px;">
                            <option selected disabled>Choose Category...</option>
                            <option value="Self-Help">Self-Help</option>
                            <option value="Fiction">Fiction</option>
                            <option value="Science">Science</option>
                            <option value="History">History</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label small fw-bold text-muted">NO. OF COPIES</label>
                        <input type="number" name="copies" class="form-control bg-light border-0 p-2 shadow-none"
                            placeholder="1" min="1" value="1" style="border-radius: 8px;" required>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label small fw-bold text-muted">DESCRIPTION / SUMMARY</label>
                        <textarea name="description" id="description"
                            class="form-control bg-light border-0 p-2 shadow-none"
                            placeholder="Write a short summary of the book..." rows="3"
                            style="border-radius: 8px;"></textarea>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label small fw-bold text-muted">UPLOAD COVER PAGE</label>
                        <div class="p-4 text-center"
                            style="border: 2px dashed #E2E8F0; border-radius: 12px; background-color: #F8FAF9;">
                            <i class="bi bi-cloud-arrow-up fs-1" style="color: #6B8E61;"></i>
                            <input type="file" name="coverimg" id="coverimg" class="form-control mt-3 shadow-none"
                                accept="image/*" required>
                            <p class="text-muted small mt-2 mb-0">Max file size: 16MB (JPG or PNG)</p>
                        </div>
                    </div>

                    <div class="col-12 mt-2 d-flex gap-2">
                        <button type="submit" name="save_book" class="btn px-4 py-2 rounded-pill shadow-sm text-white"
                            style="background-color: #728C63; border: none;">
                            <i class="bi bi-plus-circle me-2"></i>Add Book
                        </button>
                        <button type="reset" class="btn btn-light px-4 py-2 rounded-pill text-muted border"
                            style="background-color: #F8FAF9;">
                            Clear Fields
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <script>
        document.querySelectorAll('#starRating .star').forEach(star => {
            star.addEventListener('click', function () {
                const value = this.getAttribute('data-value');
                document.getElementById('ratingInput').value = value;

                // Update visual stars
                const allStars = document.querySelectorAll('#starRating .star');
                allStars.forEach(s => {
                    if (s.getAttribute('data-value') <= value) {
                        s.classList.replace('bi-star', 'bi-star-fill');
                        s.classList.remove('text-muted');
                    } else {
                        s.classList.replace('bi-star-fill', 'bi-star');
                        s.classList.add('text-muted');
                    }
                });
            });
        });
    </script>
    <script src="../../assets/js/addbookvalidation.js"></script>
</body>

</html>