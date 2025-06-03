<!-- Order Detail Modal -->
<div id="orderDetailModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-1/2 p-6">
        <h2 class="text-xl font-bold mb-4">Order #001 Details</h2>
        <p><strong>User:</strong> John Doe</p>
        <p><strong>Pet Name:</strong> Buddy</p>
        <p><strong>Service:</strong> Grooming</p>
        <p><strong>Status:</strong> Pending</p>
        <p><strong>Notes:</strong> Please handle gently, small dog.</p>
        <div class="mt-4 flex justify-end">
            <button class="px-4 py-2 bg-gray-500 text-white rounded mr-2" onclick="closeModal()">Close</button>
            <button class="px-4 py-2 bg-green-500 text-white rounded">Approve</button>
            <button class="px-4 py-2 bg-red-500 text-white rounded">Cancel</button>
        </div>
    </div>
</div>

<script>
function openModal() {
    document.getElementById('orderDetailModal').classList.remove('hidden');
}
function closeModal() {
    document.getElementById('orderDetailModal').classList.add('hidden');
}
</script>
