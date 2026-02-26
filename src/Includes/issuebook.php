<div class="card border-0 shadow-sm"
    style="border-radius: 12px; border: 1px solid #E2E8F0 !important; background-color: #FFFFFF; overflow: hidden;">
    <div class="card-header bg-white border-0 p-4 pb-0 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <div class="p-2 rounded-3 me-3" style="background-color: #E8F0E6;">
                <i class="bi bi-journal-arrow-up fs-5" style="color: #4A6741;"></i>
            </div>
            <h5 class="fw-bold mb-0" style="color: #4A6741;">Quick Issue</h5>
        </div>
        <a href="main_issue_log.php" class="text-decoration-none small fw-bold" style="color: #6B8E61;">
            View Full Log <i class="bi bi-arrow-right-short"></i>
        </a>
    </div>

    <div class="card-body p-4">
        <form action="process_issue.php" method="POST">
            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label small fw-bold text-muted mb-1">SEARCH MEMBER</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-0"><i class="bi bi-search small"></i></span>
                        <input type="text" name="member_search" class="form-control bg-light border-0 shadow-none"
                            placeholder="Type Name/ID..." list="memberList"
                            style="border-radius: 0 8px 8px 0; padding: 10px;">
                    </div>
                    <datalist id="memberList">
                        <option value="M001 - J.A. Thirundu">
                        <option value="M002 - K.G. Perera">
                    </datalist>
                </div>

                <div class="col-md-6">
                    <label class="form-label small fw-bold text-muted mb-1">SELECT BOOK</label>
                    <select name="book_id" class="form-select bg-light border-0 shadow-none"
                        style="border-radius: 8px; padding: 10px;">
                        <option selected disabled>Choose Book Title...</option>
                        <option value="501">The 5 AM Club</option>
                        <option value="502">Atomic Habits</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label small fw-bold text-muted mb-1">Reserved Date</label>
                    <input type="date" name="reserved_date" class="form-control bg-light border-0 shadow-none"
                        style="border-radius: 8px; padding: 10px;" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label small fw-bold text-muted mb-1">Return Due Date</label>
                    <input type="date" name="due_date" class="form-control bg-light border-0 shadow-none"
                        style="border-radius: 8px; padding: 10px;" required>
                </div>

                <div class="col-12 mt-4 d-flex gap-2">
                    <button type="submit" name="issue_book" class="btn px-4 py-2 rounded-pill shadow-sm text-white" style="background-color: #728C63; border: none;">
                        <i class="bi bi-check-circle me-2"></i>Issue Book Now
                    </button>
                    <button type="reset" class="btn btn-light px-4 py-2 rounded-pill text-muted border" style="background-color: #F8FAF9;">
                        Clear
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>    