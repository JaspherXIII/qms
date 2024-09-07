<div class="card">
  <div class="card-header">
    <h3 class="card-title">Waiting Appointments</h3>
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
                  <h5 class="mb-1"><?php echo $count . '. ' . h($appointment->customer_name); ?></h5>
                  <p class="mb-1"><strong>Appointment Time:</strong> <?php echo h($appointment->appointment_time); ?></p>
                  <p class="mb-0"><strong>Purpose:</strong> <?php echo h($appointment->purpose); ?></p>
                </div>
                <span class="badge badge-primary ml-3"><?php echo h($appointment->status); ?></span>
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
