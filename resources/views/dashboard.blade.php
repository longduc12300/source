
<x-app-layout>

    <!-- Main -->
    <main class="p-4">
        <!-- Top bar -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4>Dashboard</h4>
            <button class="btn btn-primary">New Report</button>
        </div>

        <!-- Stats -->
        <div class="row g-4 mb-4">
            <div class="col-md-3">
                <div class="card card-stat border-primary shadow-sm">
                    <div class="card-body">
                        <h6>Total Users</h6>
                        <h3>1,245</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-stat border-success shadow-sm">
                    <div class="card-body">
                        <h6>Revenue</h6>
                        <h3>$18,230</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-stat border-warning shadow-sm">
                    <div class="card-body">
                        <h6>Orders</h6>
                        <h3>320</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-stat border-danger shadow-sm">
                    <div class="card-body">
                        <h6>Errors</h6>
                        <h3>7</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <strong>Latest Users</strong>
            </div>
            <div class="card-body p-0">
                <table class="table mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                            <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>jane@example.com</td>
                            <td><span class="badge bg-secondary">Pending</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Mike Lee</td>
                            <td>mike@example.com</td>
                            <td><span class="badge bg-danger">Blocked</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    
</x-app-layout>
