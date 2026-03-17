interface LogoProps {
  className?: string;
  showText?: boolean;
  variant?: "full" | "icon";
}

export function Logo({ className = "", showText = true, variant = "full" }: LogoProps) {
  return (
    <div className={`flex items-center gap-3 ${className}`}>
      {/* Logo Icon - Bridge with Accessibility Symbol */}
      <svg
        width="40"
        height="40"
        viewBox="0 0 40 40"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
        className="flex-shrink-0"
      >
        {/* Background Circle */}
        <circle cx="20" cy="20" r="20" fill="#2563EB" />
        
        {/* Bridge Arc */}
        <path
          d="M8 24C8 24 12 14 20 14C28 14 32 24 32 24"
          stroke="white"
          strokeWidth="2.5"
          strokeLinecap="round"
          fill="none"
        />
        
        {/* Bridge Supports */}
        <line x1="12" y1="24" x2="12" y2="28" stroke="white" strokeWidth="2.5" strokeLinecap="round" />
        <line x1="20" y1="14" x2="20" y2="28" stroke="white" strokeWidth="2.5" strokeLinecap="round" />
        <line x1="28" y1="24" x2="28" y2="28" stroke="white" strokeWidth="2.5" strokeLinecap="round" />
        
        {/* Bridge Base */}
        <line x1="6" y1="28" x2="34" y2="28" stroke="white" strokeWidth="2.5" strokeLinecap="round" />
        
        {/* Accessibility Symbol - Person with Arms Up (on the bridge) */}
        <circle cx="20" cy="10" r="2" fill="white" />
        <path
          d="M20 12C20 12 18 13 18 15M20 12C20 12 22 13 22 15"
          stroke="white"
          strokeWidth="1.5"
          strokeLinecap="round"
        />
      </svg>

      {/* Company Name */}
      {(showText || variant === "full") && (
        <div className="flex flex-col leading-tight">
          <span className="font-bold text-xl tracking-tight">Access Setu</span>
          <span className="text-sm text-gray-600">Technologies</span>
        </div>
      )}
    </div>
  );
}
