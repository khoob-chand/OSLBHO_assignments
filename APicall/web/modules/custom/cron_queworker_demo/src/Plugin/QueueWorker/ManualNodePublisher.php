<?php

namespace Drupal\cron_queworker_demo\Plugin\QueueWorker;


/**
 * A Node Publisher that publishes nodes via a manual action triggered by an admin.
 *
 * @QueueWorker(
 *   id = "manual_node_publisher",
 *   title = @Translation("Manual Node Publisher"),
 * )
 */
// class ManualNodePublisher extends NodePublishBase {}