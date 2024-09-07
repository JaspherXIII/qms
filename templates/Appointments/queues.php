<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/all.min.css">

<style>
    .card {
        border: none;
        box-shadow: none;
    }

    .card-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
        position: relative;
        padding-right: 100px;
    }

    .card-title {
        margin-bottom: 0;
        font-size: 30px;
        font-weight: bold;
    }

    .list-group-item {
        padding: 1rem 1.25rem;
    }

    .badge-warning {
        background-color: #ffc107;
    }

    .badge-primary {
        background-color: #007bff;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var card = document.querySelector('.card');
        var cardControl = document.querySelector('.card-control');

        // Refresh the page every 5 seconds
        setInterval(function() {
            location.reload();
        }, 5000);
    });
</script>
<div class="card">
    <div class="card-header">
        <h1 class="card-title">Waiting Appointments</h1>
        <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'home']) ?>" class="text-dark float-right" role="button" data-confirm="Are you sure you want to go back?">
            <i class="fas fa-sign-out-alt"></i>
        </a>
    </div>
    <div class="card-body p-0">
        <?php if (!empty($appointments)): ?>
            <ul class="list-group list-group-flush">
                <?php $count = 1; ?>
                <?php foreach ($appointments as $appointment): ?>
                    <?php if ($appointment->status === 'waiting' || $appointment->status === 'in progress'): ?>
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h5 class="mb-1"><?= $count ?>. <?= h($appointment->customer_name) ?></h5>
                                    <p class="mb-1"><strong>Appointment Time:</strong> <?= h($appointment->appointment_time) ?></p>
                                    <p class="mb-0"><strong>Purpose:</strong> <?= h($appointment->purpose) ?></p>
                                </div>
                                <?php
                                $statusClass = '';
                                switch ($appointment->status) {
                                    case 'waiting':
                                        $statusClass = 'badge badge-warning';
                                        break;
                                    case 'in progress':
                                        $statusClass = 'badge badge-primary';
                                        break;
                                    default:
                                        $statusClass = 'badge';
                                        break;
                                }
                                ?>
                                <span class="<?= $statusClass ?> ml-3"><?= h($appointment->status) ?></span>
                            </div>
                        </li>
                        <?php $count++; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <div class="card-body text-center">
                <p>No appointments found.</p>
            </div>
        <?php endif; ?>
    </div>
</div>
