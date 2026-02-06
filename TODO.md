# TODO List for Task: Copy Modal for Borrowing and Returning Books, Ensure Consistent DataTable Sizing

## Steps to Complete

1. **Update return_book.php to use modal structure**
   - Replace the card-based form with a modal similar to borrow_add.php.
   - Adapt the form for returning books: include fields for transaction_id and actual_return_date.
   - Ensure the modal triggers and submits correctly to 'transactions/return_save'.

2. **Update all_transactions.php to add Action column and modal for returning**
   - Add an "Action" column to the DataTable with a "Return" button for each row, including user info if needed.
   - Include a modal in the page for returning books, prefilled with transaction_id and user details.
   - Ensure the modal form submits to 'transactions/return_save'.

3. **Ensure consistent DataTable sizing in all_transactions.php**
   - Add DataTable options to set consistent column widths (e.g., using columnDefs or autoWidth: false).
   - Make the table responsive and ensure even sizing across tabs if applicable.

4. **Test and verify changes**
   - Test the modal functionality in return_book.php.
   - Test the return action in all_transactions.php.
   - Verify DataTable sizing on different screen sizes.

## Progress Tracking
- [x] Step 1: Update return_book.php
- [x] Step 2: Update all_transactions.php
- [x] Step 3: Ensure consistent DataTable sizing
- [ ] Step 4: Test and verify
