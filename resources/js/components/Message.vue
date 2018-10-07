<template>
  <div class="mt-2 ml-2 mr-2 mb-0">
    <li class="list-group-item" :class="senderMessageBgColor"><slot></slot></li>
    <small class="badge float-right" :class="senderBadgeColor">You</small>
  </div>
</template>

<script>
    export default {
        props: [
          'color',
          'badgecolor'
        ],
        computed: {
          senderMessageBgColor() {
            return 'list-group-item-' + this.color;
          },
          senderBadgeColor() {
            return 'badge-' + this.badgecolor;
          }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
