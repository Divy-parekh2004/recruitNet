<?php
require_once "header.php";

require "connection.php";
$sql = "SELECT * FROM jobs";
$stmt = $conn->prepare($sql);
$stmt->execute();

$jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


    <!-- ========== NEW: FEATURED JOBS SECTION (exactly like image) ========== -->
<section class="py-5 bg-light" style="padding: 140px 0 90px;">
        <div class="container" style="padding:140px 0 90px;">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-tag"><i class="fas fa-bolt me-2"></i>Acquire Proficiency In Robust Development Job Skills</span>
                <h2 class="section-title">Together with useful notifications, collab insights, and improvement tip etc.</h2>
            </div>

            <div class="row g-4">

  <?php if(count($jobs) > 0){ ?>

    <?php foreach($jobs as $row){ ?>

        <div class="col-lg-6" data-aos="fade-up">
            <div class="job-card">

                <h3 class="job-title"><?php echo htmlspecialchars($row['title']); ?></h3>

                <div class="job-meta">
                    <span><i class="fas fa-building"></i> <?php echo htmlspecialchars($row['company']); ?></span>
                    <span><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($row['location']); ?></span>
                    <span><i class="far fa-calendar-alt"></i>
                        <?php echo date("d M Y", strtotime($row['created_at'])); ?>
                    </span>
                </div>

                <div class="job-tags">
                    <span class="job-tag"><?php echo $row['job_type']; ?></span>
                    <span class="job-tag"><?php echo $row['experience']; ?> Years</span>
                </div>

                <div class="job-salary">
                    ₹<?php echo $row['salary']; ?>/month
                </div>

                <p><strong>Skills:</strong> <?php echo $row['skills']; ?></p>

                <a href="jobDetails.php?id=<?php echo $row['id']; ?>" class="btn-read-more">
                    Read More
                </a>

            </div>
        </div>

    <?php } ?>

  <?php } else { ?>
    <p>No jobs available</p>
  <?php } ?>

  </div>

            <!-- <div class="text-center mt-5" data-aos="fade-up">
                <a href="#" class="btn btn-sign btn-lg">Explore All Job <i class="fas fa-arrow-right ms-2"></i></a>
                <a href="exploreJobs.php" class="btn btn-sign btn-lg">
    Explore All Job <i class="fas fa-arrow-right ms-2"></i>
</a> -->
            </div>
        </div>
</section>

</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/candidateHomePage.js"></script>
<!-- <script src="candidateHomePage.js"></script> -->

<!-- ========== FOOTER ========== -->
<?php
    require_once 'footer.php';
?>