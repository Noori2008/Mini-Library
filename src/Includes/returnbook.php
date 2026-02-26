<div class="card border-0 shadow-sm p-4" style="background-color: #FFFFFF; border: 1px solid #E2E8F0 !important; border-radius: 12px;">
    <div class="d-flex align-items-center mb-4">
        <i class="bi bi-arrow-return-left me-2 fs-5" style="color: #6B8E61;"></i>
        <h5 class="fw-bold mb-0" style="color: #4A6741;">Return Book</h5>
    </div>
    
    <form action="process_return.php" method="POST">
        <div class="row g-3">
            <div class="col-md-12">
                <label class="form-label small fw-bold text-muted">SEARCH ISSUE RECORD</label>
                <div class="input-group">
                    <input type="text" name="search_id" class="form-control bg-light border-0 shadow-none p-2" placeholder="Enter Member ID..." style="border-top-left-radius: 8px; border-bottom-left-radius: 8px;">
                    <button class="btn btn-primary-custom px-3" type="button"><i class="bi bi-search"></i></button>
                </div>
            </div>

            <div class="col-md-12 mt-3">
                <div class="p-3 rounded-3" style="background-color: #F8FAF9; border: 1px dashed #E2E8F0;">
                    <p class="mb-1 small text-muted">CALCULATED FINE</p>
                    <h4 class="fw-bold text-danger mb-0">LKR 0.00</h4>
                    <small class="text-muted italic">System automatically calculates fine based on due date.</small>
                </div>
            </div>

            <div class="col-12 mt-4">
                <button type="submit" class="btn btn-primary-custom px-5 py-2 rounded-pill shadow-sm">
                    Confirm Return
                </button>
            </div>
        </div>
    </form>
</div>